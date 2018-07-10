<?php
$conn = new mysqli('localhost', 'root', '', 'test1');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   $sql1 = "UPDATE userlog SET logoutTime = now() WHERE id = ".$_POST['lastid'];
    echo $sql1;
    if ($conn->query($sql1) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }

    $conn->close();

session_start(); 
include 'includes/config.php';
include 'includes/code.php';
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 60*60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
unset($_SESSION['alogin']);

session_destroy(); // destroy session


header("location:../index.php"); 
?>

