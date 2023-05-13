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
        <form action="vendor/sign_in.php" method="post">
            <label>Login</label>
            <input type="text" name="login" placeholder="Enter your login">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit">Go</button>
            <p>
                Don't you have an account? <a href="register.php">Register!</a>
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