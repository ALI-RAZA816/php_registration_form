<?php 

    include "config.php";
    $NAME = mysqli_real_escape_string($conn, $_POST['fname']); 
    $EMAIL = mysqli_real_escape_string($conn, $_POST['email']); 
    $USER_ROLE = mysqli_real_escape_string($conn, $_POST['role']); 
    $PASSWORD = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE name = '{$NAME}' && email = '{$EMAIL}'";
    $result = mysqli_query($conn, $query);

    $error = [];
    if(mysqli_num_rows($result) > 0){
        echo "<p class='alert alert-danger'>Name or Email already exists</p>";
        header("Location: http://localhost/php_registration_form");

    }else{
        $query1 = "INSERT INTO users (name, email, password, user_typ) VALUES ('{$NAME}','{$EMAIL}','{$PASSWORD}','{$USER_ROLE}')";
        $result1 = mysqli_query($conn, $query1);
        header("Location: http://localhost/php_registration_form/login.php");
    }

?>