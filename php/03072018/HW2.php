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
	private $dbh;

	public function __construct($host, $dbName, $user, $pass){
		$this->host = $host;
		$this->dbName = $dbName;
		$this->user = $user;
		$this->pass = $pass;
	}
	public function createConnection(){
		try{
			$this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->pass);
				
		}
		catch(PDOException $e){
			echo "Error:".$e->getMessage()."<br>";
		}
		
	}
	 public function closeConnection(){
		 $this->dbh = null;
	 }

	 public function select($table, $fields){
		 $fieldName = implode(", ", $fields);
		 $stm = "SELECT ".$fieldName." from ".$table.";"; 
		 echo $stm;
		foreach($this->dbh->query($stm) as $row) {
			array_walk($row, function($v, $k){
				echo "$k:$v<br>";
			});
		}
	
	 }
	 public function insert($table, $data){
		$columns = implode(", ",array_keys($data));
		var_dump($columns);
		$fieldCount = count($data); 
		$arr = array();
		echo $fieldCount;
		for($i=0; $i<$fieldCount; $i++){
			$arr[$i]='?';
		}
		$values = implode(", ", $arr);
		 $stm = "INSERT INTO ".$table."(".$columns.") VALUES (".$values.");";
		 echo $stm;die; 
		 $stmt = $this->dbh->prepare($stm);
		 for($i=0; $i<$fieldCount; $i++){
			$stmt->bindParam($i+1, $data[$i] );
		}
		
	 }

}

$c1 = new DatabaseHandler('localhost', 'lsapp', 'root', '');
$c1->createConnection();
$c1->select('users', ['name', 'id']);
// $c1->insert('user', ['name'=>'Ujjwal', 'id'=>1]);
$c1->close();