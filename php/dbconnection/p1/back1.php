 <?php
$servername = "localhost";
$username = "digiguru_digi";
$password = "CVfgJkkt[p{E";
$dbname = "digiguru_jaiswaljaingeni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$stm1 = "SELECT * from userfam where mobile = ".$_POST['mobile'];
$result = mysqli_query($conn, $stm1);

if (mysqli_num_rows($result) > 0) {
	echo "User already exists";
}else{
	$stm = "INSERT INTO user (name, mobile, email, famMem) VALUES ('".$_POST['name']."', ".$_POST['mobile'].", '".$_POST['email']."', ".$_POST['family_mem'].");";
if(mysqli_query($conn, $stm)){
	$last_id = mysqli_insert_id($conn);
	echo "Row Inserted $last_id";
	$sql = "";
	for($i=0; $i<$_POST['family_mem']; $i++){
		$sql.="INSERT INTO userfam (name, mobile, email, relationship, userid) VALUES ('".$_POST['name'.$i]."', ".$_POST['mob'.$i].", '".$_POST['email'.$i]."', '".$_POST['relation'.$i]."', ".$last_id.");";
	}
	echo $sql;
	if ($conn->multi_query($sql) === TRUE) {
	    echo "New records created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

}

mysqli_close($conn);

