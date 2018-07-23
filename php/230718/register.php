<?php
require_once('config.php');
require_once('db.php');
var_dump($_POST);
try {
    $password = $_POST['password1'];
    $name = $_POST['name1'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
    $sql = "INSERT INTO student.users (name, mobile, password, email)
    VALUES ('$name', '$mobile', '$password', '$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header("location:/login.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
