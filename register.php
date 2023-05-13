<?php
session_start();
if($_SESSION['user']){
    header("location: profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Autorisation and Registration</title>
</head>

<body>
    <!--Form of Autorisation and refistration -->
    <div class="container my-5">
        <form action="vendor/sign_up.php" method="post" enctype="multipart/form-data">
            <label>FIO</label>
            <input type="text" name="full_name" placeholder="Enter your full name">
            <label>Login</label>
            <input type="name" name="login" placeholder="Enter your login">
            <label>Mail</label>
            <input type="name" name="email" placeholder="Enter your mail">
            <label>Image</label>
            <input type="file" name="avatar">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <label>Reapet Passwor</label>
            <input type="password" name="password_confirm" placeholder="Pleas Enter your email">

            <button type="submit">Go</button>
            <p>
                Do you already have an account? <a href="index.php">Log in!</a>
            </p>

            <?php
            if ($_SESSION['message']) {
                echo '
                <p class=
                "msg"> ' . $_SESSION['message'] . '
            </p>';
            }
            unset($_SESSION['message']);

            ?>

        </form>
    </div>
    <!--Form of Autorisation and refistration -->

</body>

</html>