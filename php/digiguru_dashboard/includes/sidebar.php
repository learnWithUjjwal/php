 
     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/digiguru.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                    <?php

                    
$eid=$_SESSION['eid'];
$sql = "SELECT FirstName,LastName,EmpId from  tblemployees where id=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
echo $eid;
if(isset($_GET['attendance'])){
    try {    
        echo $eid;
        include('test.php');
        $sql1 = "INSERT INTO userlog (empid,loginTime) VALUES (".$eid.", now());"; 
         $dbh->exec($sql1);
         $lastid = $dbh->lastInsertId();
         }
     catch(PDOException $e)
         {
         echo $sql1 . "<br>" . $e->getMessage();
         }                  
}

echo $lastid;
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
                                <p><?php echo htmlentities($result->FirstName." ".$result->LastName);?></p>
                                <span><?php echo htmlentities($result->EmpId)?></span>
                         <?php }} ?>

                       
                        </div>
                    </div>

                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">

  <li class="no-padding"><a class="waves-effect waves-grey" href="myprofile.php"><i class="material-icons">account_box</i>My Profiles</a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="emp-changepassword.php"><i class="material-icons">settings_input_svideo</i>Change Password</a></li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Leaves<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="apply-leave.php">Apply Leave</a></li>
                                <li><a href="leavehistory.php">Leave History</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        
                  
                    <form name="attendance" method="GET">
	<input type="submit" name="attendance">
	
</form>

                                <!--a class="waves-effect waves-grey" href="logout.php"><i class="material-icons">exit_to_app</i>Sign Out</a-->
                            </li>
                    <li class="no-padding">
                  <?= $lastid ?>
                    <form action="includes/logout.php" method="POST">
                        <input type="hidden" name="lastid" value="<?= $lastid ?>">
	<input type="submit" name="logout">
	
</form>

                                <!--a class="waves-effect waves-grey" href="logout.php"><i class="material-icons">exit_to_app</i>Sign Out</a-->
                            </li>


                </ul>
                <div class="footer">
                    <p class="copyright"><a href="https://digiguruinc.com/">DigiGuruINc </a>©</p>

                </div>
                </div>
            </aside>
