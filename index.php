<?php

    session_start();
    if(isset($_SESSION["currentUser"])){
        $currentUser = $_SESSION["currentUser"];
    }else{
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD App</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body>

    <nav class="navbar bg-body-secondary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder ms-3" href="index.html">KRoOD</a>
            <a class="btn btn-outline-danger" href="logout.php">Logout</a>
        </div>
    </nav>

    <div class="container my-3">
        <table class="table">
            <thead>
                <tr>
                    <th class="col">ID</th>
                    <th class="col">Username</th>
                    <th class="col">Password</th>
                    <th class="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="col">SampleData</th>
                    <th class="col">SampleData</th>
                    <th class="col">SampleData</th>
                    <th class="col">SampleData</th>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
