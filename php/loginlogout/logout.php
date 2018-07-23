<?php
$conn = new mysqli('localhost', 'root', '', 'test2');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $sql = "select id from userlog where uderid = ". $_POST['id'].";";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
    $sql1 = "UPDATE userlog SET logoutTime = now() WHERE id = ". $_POST['lastid'].";";
    if ($conn->query($sql1) === TRUE) {
    	echo "Record updated successfully";
		} else {
    	echo "Error updating record: " . $conn->error;
		}

	$conn->close();
// }else{
// 	echo "DO NOT WORK";
// }