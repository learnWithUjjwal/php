<?php
$conn = new mysqli('localhost', 'root', '', 'test2');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{

}
// Getting the id using mail
$sql = "select id from login where email = '".$_POST['email']."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	//Inserting the login time of the employee
	$sql2 = "insert into userlog (uderid, login) values(".$row['id'].", now());";

	if ($conn->query($sql2) === TRUE) {
		 $last_id = $conn->insert_id;
		 require('main.html');
	} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}
else{
	echo 'Error in first';
}
$conn->close();
?>
