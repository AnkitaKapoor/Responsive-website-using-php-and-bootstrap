<?php
session_start();   
$page_title = "Reset Password!";
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
<script>
   function myFunction()
   {
	   //boolean  a = true;
	   var pass1 = document.ForgetPassword.pass.value;
	   var pass2 = document.ForgetPassword.cpass.value;
	   if(pass1 != pass2)
	   {
		   window.alert("The password doesnot match");
		   return false;
	   }
	   if(pass1.length < 5)
	   {
		   window.alert("The password is less then 5 characters ");
		   return false;
	   }
	   //return a;
	   
	   
   }
</script>
<div class="container">
<br><br>
<br><br>


<section class="ForgetPassword" id="ForgetPassword">   
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Forget Password</b></h3>
</div>
</div>
<div class="row panel panel-body">
<div class="col-lg-4 col-lg-offset-4">
<form name="ForgetPassword" id="ForgetPassword"  action="password.php" method="POST"validate onSubmit = "return myFunction();">
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Password</label>
<input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required data-validation-required-message="Please enter your password.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Confirm Password</label>
<input type="password" class="form-control" placeholder="Password" name="cpass" id="cpass" required data-validation-required-message="Please confirm your password.">
<p class="help-block text-danger"></p>
</div>
</div>

<div class="row">
<div class="form-group col-xs-12 text-center">
<button type="submit" class="btn btn-success btn-lg">Reset Password</button>
</div>
</div>

<?php
if(isset($_SESSION['pass']) && $_SESSION['pass']==4) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>Please check your Email ID!!!</label>
</div>
</div>
<?php
}
$_SESSION['pass']= 8;
?>
</form>
</div>
</div>
</div>
</section>
<br><br>
<br><br> <br><br>
<br><br>
<br><br>
</div>
<?php
include('./Footer.php');
?>
