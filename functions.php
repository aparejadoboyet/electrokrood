<?php

    require_once("connection.php");

    function insertData($conn, $user, $pass) {
        $sql = "insert into users (username, password) values (?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $user, $pass);

        if($stmt->execute()){
            echo "Data inserted successfully!";
        }else{
            die("Error: " . $conn->error);
        }
    }

    function readData($conn, $user, $pass) {
        $sql = "select * from users where username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if($row["password"] == $pass ){
                session_start();
                $_SESSION["currentUser"] = $row["uid"];
                header("Location: index.php");  
            }else{
                echo "Invalid username/password!";
            }
        }else{
            echo "User doesn't exist!";
        }
        $conn->close();
    }
    
    if(isset($_POST["signup"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        insertData($conn, $user, $pass);
    }elseif(isset($_POST["login"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        readData($conn, $user, $pass);
    }

?>