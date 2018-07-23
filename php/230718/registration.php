<?php 
require_once('./config.php');
require_once('./includes/header.php');
require_once('./includes/nav.php');

?>
<div class="formContainer">
<form action="register.php" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name1" aria-describedby="name" placeholder="Enter your name">    
  </div>
  <label for="exampleInputEmail1">Mobile</label>
    <input name="mobile" type="text" class="form-control" id="exampleInputMobile1" aria-describedby="mobile" placeholder="Enter your name">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email" placeholder="Enter your email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php require_once('./includes/footer.php');?>