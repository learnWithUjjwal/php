<?php
require_once('./config.php');
try {
    
    $conn = new PDO("mysql:host=".SERVER_NAME.";dbname=".DB_NAME.";", USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }