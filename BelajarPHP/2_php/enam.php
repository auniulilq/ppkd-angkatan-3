<?php
if (isset($_REQUEST['login'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $email_table = "admin@gmail.com";
    $password_table = "123456789";

    if ($email == $email_table and $password == $password_table) {
        echo "Berhasil Login";
    } else {
        header("location:enam.php?error=login");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>

    <div class="login">
        <?php if (isset($_GET['error'])) { ?>
            <p class="alert">Mohon periksa kembali email anda</p>
        <?php } ?>

        <form action="" method="post">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter your email">
            <br><br>
            <label for="">Password</label>
            <input type="password" name="password">
            <br><br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>

</html>