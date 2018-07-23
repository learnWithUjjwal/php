<?php 
require_once('./config.php');
require_once('./includes/header.php');
require_once('./includes/nav.php');
?>

<div class="formContainer">
<form action="change-pwd.php" method="POST">
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="passwordOld" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="passwordNew" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php require_once('./includes/footer.php');?>