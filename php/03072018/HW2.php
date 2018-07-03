<!-- // Create a class DatabaseHandler with the following methods implementation:
// a-> Open connection 
// b-> Insert Data
// c-> Select Data
// d-> Close connection -->
<?php

class DatabaseHandler{
	private $host;
	private $dbName;
	private $user;
	private $pass;

	public function __construct($host, $dbName, $user, $pass){
		$this->host = $host;
		$this->dbName = $dbName;
		$this->user = $user;
		$this->pass = $pass;
	}
	public function createConnection(){
		try{
			$dbh = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->pass);	
		}
		catch(PDOException $e){
			echo "Error:".$e->getMessage()."<br>";
		}
		
	}
}

$c1 = new DatabaseHandler('localhost', 'test', 'root', '');
$c1->createConnection();