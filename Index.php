<?php
session_start();  
$page_title = "Welcome to Let's Connect!"; 
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
<header class="modal-header">
<div class="container">
<div class="row">
<div class="col-lg-12">
<img class="img-responsive" src="images/colo.jpg" alt="dsa">

</div>
</div>
</div>
</header>
<section class="searchitem" id="searchitem" >
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Search Items</b></h3>
</div>
</div>
<div class="row ">
<div class="col-lg-4 ">
<img src="images/roundicons.png" class="img-responsive" alt="">
</div>      
<div class="col-lg-8 panel panel-body">
<p >Via the LetsConnect Website, you can look for suitable items and their respective donors. If you find some, you might try to connect with them.</p>
</div>  
<h5 class="text-center"><b>WE ARE HERE TO MAKE THE LINK</b></h3>  
   <div class="input-group">
<input type="text" class="form-control" placeholder="Search for...">
<span class="input-group-btn">
<button class="btn btn-default" onclick="window.location.href='SearchItem.php'"type="button">Go!</button>
</span>
</div>
</div>
</div>
</section>
<section class="wishlist" id="wishlist">
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Wish List</b></h3>
</div>
</div>
<div class="row ">
<div class="col-lg-8 panel panel-body">
<p> If you don’t find suitable item of your need, you might place my wishlist and request with the LetsConnect Website, and hope just the right generous donor might log in and see your request. </p>
<h5 class="text-center"><b>WE ARE HERE TO HEAR YOUR NEEDS</b></h5>

</div>  
<div class="col-lg-4 ">
<img src="images/rsx.jpg" class="img-responsive" alt="">
</br>
<h5 class="text-center"><b>Please log in to use this feature</b></h5>
</div>            
</div>
</div>
</div>
</section>
<section class="postanAd" id="postanAd">
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Post An Ad</b></h3>
</div>
</div>
<div class="row ">
<div class="col-lg-4 ">
<img src="images/recycle.jpg" class="img-responsive" alt="">
</br>
<h5 class="text-center"><b>Please log in to use this feature</b></h5>
</div>      
<div class="col-lg-8 panel panel-body">
<p >Via the LetsConnect Website, you can connect directly with people-in-need by listing what you have available to give. You could also make your items available for a very low price instead of being completely free. Also, by browsing wish list on the site, you could also gain a better idea of specific needs of people. Please tell us about what you have to donate so all users registered with LetsConnect can see your offer. 
</p>
</div>  
<h5 class="text-center"><b>WE ARE HERE TO HELP EVERYONE TO HELP SOMEONE</b></h5>   
</div>
</div>
</div>
</section>
<form action="addReport.php" method="post">
<section id="contact" class="contact" >
<div class="container panel panel-primary" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h2 >Contact Us</h2>
<h4>Compliments & Complaints</h4>
</div>
</div>
<div class="row panel panel-body">
<div class="col-lg-6 col-lg-offset-3">
<form name="sentMessage" id="contactForm" validate>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Name</label>
<input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Email Address</label>
<input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Phone Number</label>
<input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone"required data-validation-required-message="Please enter your phone number.">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Message</label>
<textarea rows="5" class="form-control" placeholder="Message" id="message" name="message"required data-validation-required-message="Please enter a message."></textarea>
<p class="help-block text-danger"></p>
</div>
</div>
<br>
<div id="success"></div>
<div class="row">
<div class="form-group col-xs-12 text-center">
<button type="submit" class="btn btn-success btn-lg">Send</button>
</div>
</div>
<?php
if(isset($_SESSION['status']) && $_SESSION['status']==1) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>Feedback submitted successfully!!!</label>
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
	</form>
	<?php
include('./m.php');
?>
<?php
include('./Footer.php');
?>
