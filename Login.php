<?php
session_start();   
$page_title = "Login Page!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');
}
elseif(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');
}
else
{
   include('./Header.php');
}
?>
<div class="container">
<br><br>
<br><br>

<div class="container">
<div class="row">
<form action="authenticate.php" method="POST">
<section class="aboutus" id="aboutus" >
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Login</b></h3>
</div>
</div>
<div class="row panel panel-body">
<div class="col-lg-4 col-lg-offset-4">

<?php
if(isset($_SESSION['status']) && $_SESSION['status']==1) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>You are successfully registered. Please Login!!!</label>
</div>
</div>
<?php
}
session_start();
$_SESSION['status']= 0;
?>
<?php
if(isset($_SESSION['sta']) && $_SESSION['sta']==3) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>Please Login again with valid credentials!!!</label>
</div>
</div>
<?php
}
session_start();
$_SESSION['sta']= 0;
?>
<?php
if(isset($_SESSION['pass']) && $_SESSION['pass']==1) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>Password updated. Please Login again!!!</label>
</div>
</div>
<?php
}
session_start();
$_SESSION['pass']= 0;
?>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Email Address"  name="email" id="email" required data-validation-required-message="Please enter your email address.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Password</label>
<input type="password" class="form-control" placeholder="Password" name="password"id="password" required data-validation-required-message="Please enter your password.">
<p class="help-block text-danger"></p>
</div>
</div>
<br>
<div id="success"></div>
<div class="row">
<div class="form-group col-xs-12 text-center">
<button type="submit" class="btn btn-success btn-lg">Login</button>
<button onclick="window.location.href='ForgetPassword.php'" class="btn btn-success btn-lg">Forget Password</button>
</div>
<div class="form-group col-xs-12 text-center">
<button onclick="window.location.href='Registration.php'"  class="btn btn-success btn-lg">Please Register</button>
</div>
</div>
</div>
</div>
</div>
</section>
</form>
</div>
</div>
<br><br>
<br><br> <br><br>
<br><br>
<br><br>
</div>
<?php
include('./Footer.php');
?>
