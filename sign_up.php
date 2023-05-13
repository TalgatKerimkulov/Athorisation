<?php
    session_start();
    require_once 'connect.php';
    

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if($password === $password_confirm){
        /// con...
        $path = "uploads/" . time() .  $_FILES['avatar']['name'];
        if(! move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
            $_SESSION['message'] = 'Oshibka pri donwnlpoad';
        header("location: ../register.php");
        }
        $password  = md5($password );
        mysqli_query($mysqli,"INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
        VALUES (NULL, '$full_name', '$login', '$email', '$password','$path')");
    
        $_SESSION['message'] = 'Very Good';
        header("location: ../index.php");
    }else{
        $_SESSION['message'] = 'Paroli ne sovpadayut';
        header("location: ../register.php");
        exit;
    }
