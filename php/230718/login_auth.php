<?php
require_once('config.php');
require_once('db.php');
try{
// $stmt = "select * from users where email = '".$_POST['email']."' && password = '".$_POST['password1']."';"; 
// $conn->exec($sql);
echo $_POST['email'];
$stmt = $conn->prepare("select * from users where email = '".$_POST['email']."'");
if ($stmt->execute()) {
$row = $stmt->fetch();
if(count($row) > 0){
    echo $row['name'];
    echo $row['password'];
    echo $_POST['password1'];

    if($row['password'] == $_POST['password1']){
        $_SESSION['name'] = $row['name'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header("location:/dashboard.php");
    }else{
        echo "wrong password";
        session_destroy();
        header("location:/index.php");
    }
   
}
  
}
}
catch(PDOException $e){
        $e->getMessage();

}
