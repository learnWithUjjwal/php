<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
for($i=0; $i<$_POST['family_mem']; $i++){
	echo $_POST["name".$i];
	echo $_POST["mob".$i]; 	
}
?>
</body>
</html>

