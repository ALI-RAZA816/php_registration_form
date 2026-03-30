<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
     <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="height:100vh">
        <div class="row d-flex justify-content-center align-items-center" style="height:100vh">
            <div class="col-md-4 signup">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h1>Login</h1>
                    <div>
                        <label class="text-dark" for="email">Email:</label>
                        <input type="text" id="email" name="lemail" class="mb-3 form-control">
                    </div>
                    <div>
                        <label class="text-dark" for="password">Password:</label>
                        <input type="password" id="password" name="lpassword" class="mb-3 form-control">
                    </div>
                    <input type="submit" name="submit" class="mt-2" value="Login">
                    <span>don't have an account? <a href="index.php">Register</a></span>
                </form>
            </div>
        </div>
        <?php

        if(isset($_POST['submit'])){
            include "config.php";
            $EMAIL = mysqli_real_escape_string($conn, $_POST['lemail']);
            $PASSWORD = md5($_POST['lpassword']);
            $query = "SELECT * FROM users WHERE email = '{$EMAIL}' && password = '{$PASSWORD}'";
            $result = mysqli_query($conn, $query) or die("Query Failed");
          

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['name'];
                    $_SESSION['user_email'] = $row['email'];
                    $_SESSION['user_password'] = $row['password'];
                    $_SESSION['user_type'] = $row['user_typ'];
                    header("Location: http://localhost/php_registration_form/welcome.php");
                }
            }else{
                echo "<p class='alert alert-danger'>email and password incorrect.</p>";
            }
        }
        ?>
    </div>
</body>
</html>