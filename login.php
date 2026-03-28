<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
     <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container" style="height:100vh">
        <div class="row d-flex justify-content-center align-items-center" style="height:100vh">
            <div class="col-md-4 signup">
                <form action="">
                    <h1>Login</h1>
                    <div>
                        <label class="text-dark" for="email">Email:</label>
                        <input type="text" id="email" name="lemail" class="mb-3 form-control">
                    </div>
                    <div>
                        <label class="text-dark" for="password">Password:</label>
                        <input type="text" id="password" name="lpassword" class="mb-3 form-control">
                    </div>
                    <input type="submit" name="submit" class="mt-2" value="Login">
                    <span>don't have an account? <a href="index.php">Register</a></span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>