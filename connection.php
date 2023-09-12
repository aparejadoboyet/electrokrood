<?php

$host = "sql304.byetcluster.com";
$username = "if0_34835350";
$password = "J3TeOfZTWOQvKs";
$database = "if0_34835350_krood_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo("Successful!");
}

?>
