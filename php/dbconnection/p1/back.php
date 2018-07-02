//creating the database

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try{
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //use exec() since no results are retutned;

    // our SQL statements
    $query = $con->prepare("SELECT * FROM user");
    $query->execute();
    $result = $query->setFetchMode(PDO::FETCH_ASSOC); 
    
    echo $result;

    echo "There are ".count($result)." Employee(s).";
    foreach(new TableRows(new RecursiveArrayIterator($query->fetchAll())) as $k=>$v) {
        echo $v;}

  	 // $stm = "INSERT INTO user (name, mobile, email, famMem) VALUES ('".$_POST['name']."', ".$_POST['mobile'].", '".$_POST['email']."', ".$_POST['family_mem'].")";
    // $con->exec($stm);
     
    // $last_id = $con->lastInsertId();
    // echo $last_id;

    //  for($i=0; $i<$_POST['family_mem']; $i++){
    // 	$con->exec("INSERT INTO userfam (name, mobile, email, relationship, userid) 
    // VALUES ('".$_POST['name'.$i]."', ".$_POST['mob'.$i].", '".$_POST['email'.$i]."', '".$_POST['relation'.$i]."', ".$last_id.")");

    // }
    // echo "Submission Successful... <br> Go Back to <a href='https://jaiswaljain.com'>JaiswalJain.com</a>";

   
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    
    echo "Error: " . $e->getMessage();
    }

$con = null;
?>