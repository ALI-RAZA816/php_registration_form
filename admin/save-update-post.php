<?php
     
    include "config.php";
    $USER_ID = mysqli_real_escape_string($conn, $_POST['user_id']);
    $USER_NAME = mysqli_real_escape_string($conn, $_POST['fname']);
    $USER_EMAIL = mysqli_real_escape_string($conn, $_POST['email']);
    $USER_ROLE = mysqli_real_escape_string($conn, $_POST['role']);

    $query = "UPDATE users SET name = '{$USER_NAME}', email = '{$USER_EMAIL}', user_typ = '{$USER_ROLE}' WHERE id = {$USER_ID}";
    $result = mysqli_query($conn, $query);

    if($result){
        header("Location: http://localhost/php_registration_form/admin");
    }else{
        echo "<p class='alert alert-danger'>User can't updated</p>";
    }
?>