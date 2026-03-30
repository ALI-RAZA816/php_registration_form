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
        <div class="row px-2 d-flex justify-content-center align-items-center" style="height:100vh">
            <div class="col-md-4 signup">
                <form action="create-account.php" method="POST">
                    <h1>Sign Up</h1>
                    <div>
                        <label class="text-dark" for="firstname">Name:</label>
                        <input type="text" id="name" name="fname" class="mb-3 form-control">
                    </div>
                    <div>
                        <label class="text-dark" for="email">Email:</label>
                        <input type="text" id="email" name="email" class="mb-3 form-control">
                    </div>
                    <div>
                        <label class="text-dark" for="password">Password:</label>
                        <input type="password" id="password" name="password" class="mb-3 form-control">
                    </div>
                    <div>
                        <label class="text-dark" for="role">Role:</label>
                        <select class="form-select mb-3" id="role" name="role"  aria-label="Default select example">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="mt-2" value="Register">
                    <span>Have an account? <a href="login.php">Login</a></span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>