<?php
// session_start();
class AppController{
    protected function view($view_path, $data = []){
        ob_start();
        extract($data);
        require_once($view_path);       
        return ob_get_contents();
    }
}

try {
    
   $sql1 = "INSERT INTO userlog (empid,loginTime) VALUES (".$id.", now());"; 
    $dbh->exec($sql1);
    $id = $dbh->lastInsertId();
    
  
    // require('main.html');
    // echo $id; die;
    // echo $id; 
    // require('../logout.php');
    
// include 'sidebar.php';

    // echo $id; die;
    }
catch(PDOException $e)
    {
    echo $sql1 . "<br>" . $e->getMessage();
    }

$lid = $GLOBALS['id'];
// echo $lid; die;
class PageController extends AppController{
    public function index(){
        // echo $GLOBALS['id'];die;
        parent::view('sidebar.php', ['id' => $GLOBALS['id']]);
    }  
}
 $page = new PageController();
// $page->index();
