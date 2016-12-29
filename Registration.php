<?php
session_start();   
$page_title = "Register Page!";
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
   function myFunction()
   {
	   //boolean  a = true;
	   var pass1 = document.register.password.value;
	   var pass2 = document.register.cpassword.value;
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
   
google.maps.event.addDomListener(window,'load',intilize);
function intilize()
{
var autocomplete= new google.maps.places.Autocomplete(document.getElementById("txtautocomplete"));
google.maps.event.addListener(autocomplete,'place_changed',function()
{
var place=autocomplete.getPlace();
var location="<b>Location:</b>"+ place.formatted_address+"</br>";
location+= "<b>Latitude:</b>"+ place.geometry.location.lat()+"</br>";
location+= "<b>Longitude:</b>"+ place.geometry.location.lng()+"</br>";
  document.getElementById('lati').value = place.geometry.location.lat()
 document.getElementById('longi').value = place.geometry.location.lng()
});

};

</script>
<div class="container">
<br><br>
<br><br>

<form action="addUser.php" name = "register" method="POST" onSubmit = "return myFunction();">   
<section class="aboutus" id="aboutus" >
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Register</b></h3>
</div>
</div>
<div class="row panel panel-body">
<div class="col-lg-12 ">
<form name="sentMessage" id="contactForm" validate>
<div class="row control-group">
<div class="col-lg-9 ">
<label>Full Name</label> 
<input type="text" class="form-control" placeholder="Name" name = "name" id="name" required data-validation-required-message="Please enter your name.">
<p class="help-block text-danger"></p>
</div>
<div class="col-lg-3 ">
<label>Nick Name</label> 
<input type="text" class="form-control" placeholder="NickName" name = "nickname" id="nickname" required data-validation-required-message="Please enter your nick name.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="col-lg-9 ">
<label>Address</label> 
<input type="text" id="txtautocomplete" name="txtautocomplete"class="form-control" placeholder="enter your address" required data-validation-required-message="Please enter your Address.">
<input type="text" id="lati" name="lati" style="display:none">
<input type="text" id="longi" name="longi"style="display:none">
</div>
<div class="col-lg-3 ">
<label>Contact No.</label> 
<input type="text" class="form-control" placeholder="Contact" name="contact" id="contact" required data-validation-required-message="Please enter your Contact No.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="col-lg-1 ">
<label>Gender</label>
<select name="sex" id="sex">
<option value="M" required>Male</option>
<option value="F" required>Female</option>
</select>
</div>
<div class="col-lg-5 ">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
<p class="help-block text-danger"></p>
</div>
<div class="col-lg-3 ">
<label>Password</label> 
<input type="password" class="form-control" placeholder="Password" name="password" id="password" required data-validation-required-message="Please enter your password.">
<p class="help-block text-danger"></p>
</div>
<div class="col-lg-3 ">
<label>Confirm Password</label> 
<input type="password" class="form-control" placeholder="Confirm Password" name = "cpassword" id="cpassword" required data-validation-required-message="Please enter your password again.">
<p class="help-block text-danger"></p>
</div>
</div>
</br>
<div class="row ">
<div class="form-group col-xs-12 text-center">
<button type="submit" class="btn btn-success btn-lg">Send</button>
<button type="reset" class="btn btn-success btn-lg">Reset</button>
</div>
</div>
<?php
if(isset($_SESSION['status']) && $_SESSION['status']==2) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>This Email ID is already registered. Please register with another Email ID!!!</label>
</div>
</div>
<?php
}
session_start();
$_SESSION['status']= 0;
?>




</form>
</div>
</div>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</form> 
<br><br>
<br><br> <br><br>
<br><br>
<br><br>
<br><br>
</div>
<?php
include('./Footer.php');
?>
