<?php
require_once('config.php');
require_once('db.php');
try{
    // $stmt = "select * from users where email = '".$_POST['email']."' && password = '".$_POST['password1']."';"; 
    // $conn->exec($sql);
    $stmt = $conn->prepare("select * from users where password = '".$_POST['passwordOld']."';");
    if ($stmt->execute()) {
    $row = $stmt->fetch();
    if(count($row) > 0){
        print_r($_SESSION);
        $sql = "UPDATE users SET password='".$_POST['passwordNew']."' WHERE id=".$_SESSION['id'];

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
        
        
    header("location:/dashboard.php");
    }
      
    }
    }
    catch(PDOException $e){
            $e->getMessage();
    
    }
    