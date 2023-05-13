<?php 
session_start(); 
if(!$_SESSION['user']){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="forma">
    <form class="form-condrol">
        <img src="<?php echo $_SESSION['user']['avatar'];?>" width="200" alt="">
        <h2><?php echo $_SESSION['user']['full_name']?></h2>
        <a href="#"><?php echo $_SESSION['user']['email']?></a>
        <br><br>
        <a href="vendor/loguat.php" class="logaut">Loguot</a>
    </form>
    </div>
</body>
</html>