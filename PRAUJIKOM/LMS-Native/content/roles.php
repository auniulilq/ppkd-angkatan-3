<?php
$queryRoles = mysqli_query($connect, "SELECT * FROM roles ORDER BY id DESC");
$rowsRoles  = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($connect, "DELETE FROM users WHERE id = '$id'");
    header("location:?page=level&notif=success");
}
?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Roles</h3>
            </div>
            <div class="card-body">
                <div align="right" class="mb-3 mt-3">
                    <a href="?page=add-user" class="btn btn-primary">Create New Roles</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($rowRoles as $row): ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td>
                                    <a href="?page=add-roles&edit=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="?page=roles&delete=<?php echo $row['id'] ?>"
                                        onclick="return confirm('Are you sure??')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>