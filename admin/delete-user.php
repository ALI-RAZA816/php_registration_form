<?php 
    include "config.php";
    $USER_ID = $_GET['id'];
    $query = "DELETE FROM users WHERE id = {$USER_ID}";
    $result = mysqli_query($conn, $query);
    if($result){
        header("Location: http://localhost/php_registration_form/admin");
    }else{
        echo "<p class='alert alert-danter'>Record can't be deleted</p>";
    }

?>