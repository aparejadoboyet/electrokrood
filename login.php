<?php

    require_once("functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <style>
        body {
            height: 100vh;
            min-height: 480px;
        }
    </style>
</head>
<body>
    
    <div class="container d-flex h-100 align-items-center justify-content-center">
        <div class="card" style="height: 360px; width:360px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
            <h1 class="card-header h-25 d-flex align-items-center">Login</h1>
            <form method="post" class="h-75">
                <div class="card-body h-75 d-flex flex-column justify-content-evenly">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control mt-2" id="username" name="username" autocomplete="username" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control mt-2" id="password" name="password" autocomplete="current-password" placeholder="Enter your password">
                    </div>
                </div>
                <div class="card-footer h-25 d-flex align-items-center justify-content-end ">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <span class="mx-2">or</span>
                    <a href="signup.php" class="btn btn-outline-danger">Signup</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
