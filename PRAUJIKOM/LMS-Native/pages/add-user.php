<?php
if (isset($_POST['save'])) {
    $role_id = $_POST['role_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert = mysqli_query($connect, "INSERT INTO users (role_id, name, email, password) VALUES ('$role_id', '$name', '$email', '$password')");
    if ($insert) {
        header("location:?page=user&add=success");
    }
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $role_id = $_POST['role_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($_POST['password'] != '') {
        $password = $_POST['password'];
    } else {
        $password = $rowEdit['password'];
    }

    $update = mysqli_query($connect, "UPDATE users SET role_id = '$role_id', name = '$name', email = '$email', password = '$password' WHERE id = '$id'");
    if ($update) {
        header("location:?page=user&update=success");
    }
}

$queryLevels = mysqli_query($connect, "SELECT * FROM level ORDER BY id_level ASC");
$rowLevels  = mysqli_fetch_all($queryLevels, MYSQLI_ASSOC);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3><?php echo isset($_GET['edit']) ? 'Edit' : 'Create New' ?> Level</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Role ID *</label>
                        <select name="id_level" id="" class="form-control">
                            <option value="">Choose Level</option>
                            <?php foreach ($rowLevels as $rowLevel): ?>
                                <option <?php echo isset($_GET['edit']) ? ($rowLevel['id'] == $rowEdit['role_id']) ? 'selected' : '' : '' ?> value="<?php echo $rowLevel['id'] ?>"></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Name *</label>
                        <input
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['name'] : '' ?>"
                            type="text" class="form-control"
                            name="name" required placeholder="Enter  Name">
                    </div>
                    <div class="mb-3">
                        <label for="">Email *</label>
                        <input
                            value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>"
                            type="email" class="form-control"
                            name="email" required placeholder="Enter Level Name">
                    </div>
                    <div class="mb-3">
                        <label for="">Password *</label>
                        <input

                            type="password" class="form-control"
                            name="password" required placeholder="Enter Password">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'save' ?>">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>