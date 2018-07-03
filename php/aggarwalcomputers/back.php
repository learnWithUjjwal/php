<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$sql = "INSERT INTO complaint(mobile, name, comanyname, complaint)
VALUES (".$_POST['mobile'].", '".$_POST['name']."', '".$_POST['compName']."', '".$_POST['complaint']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $last_id = mysqli_insert_id($conn);
    $sql = "SELECT * FROM complaint WHERE id =". $last_id;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    
    echo $row['id'];


    
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th width="200px">Name</th>
			<td width="200px">Sonal</td>
		</tr>
		<tr>
			<th><?php $row['id'] ?>Company Name</th>
			<td>Sonal Pvt Ltd</td>
		</tr>
		<tr>
			<th>Time of complaint</th>
			<td>Current Date</td>
		</tr>
		<tr>
			<th>Complaint id</th>
			<td>123546789</td>
		</tr>
	</table>

</body>
</html>