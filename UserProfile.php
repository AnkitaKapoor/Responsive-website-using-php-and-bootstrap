<?php
session_start(); 
$page_title = "Welcome User!";
if(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');


?>
<div class="container">
<br><br>
<br><br>
<br><br>
<div class="container">
<section class="aboutus" id="aboutus" >
<div class="container  text-center" >
<div class="row  panel panel-primary">
<div class="col-lg-4">
<img class="responsive" src="images/u/addl.png">
<p class="panel panel-heading"><a href="PostItem.php" class="btn btn-info" role="button">Post Item</a></p>
</div>
<div class="col-lg-4" >
<img class="responsive" src="images/u/icon_data.png">
<p class="panel panel-heading"><a href="SearchItem.php" class="btn btn-info" role="button">Search</a></p>
</div>
<div class="col-lg-4">
<img class="responsive" src="images/u/wishlist.png">
<p class="panel panel-heading"><a href="Wishlist.php" class="btn btn-info" role="button">Wishlist</a></p>
</div>
</div>
<div class="row  panel panel-primary">
<div class="col-lg-4">
<img class="responsive" src="images/u/male.png">
<p class="panel panel-heading"><a href="UpdateProfile.php" class="btn btn-info" role="button">Profile</a></p>
</div>
<div class="col-lg-4">
<img class="responsive" src="images/u/request.png">
<p class="panel panel-heading"><a href="Request.php" class="btn btn-info" role="button">Request</a></p>
</div>
<div class="col-lg-4">
<img class="responsive" src="images/u/feedback.png">
<p class="panel panel-heading">	<a href="Feedback.php" class="btn btn-info" role="button">Feedback</a></p>
</div>
</div>
</div>
</section>
</div>
<br><br>
<br><br>
<br>
</div>
<?php
}
else
{
   
   header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Access.php",true);
   
}
?>
<?php
include('./Footer.php');
?>