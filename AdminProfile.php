<?php
session_start(); 
$page_title = "Welcome Admin!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');
?>
<div class="container">
<br><br>
<br><br>

<br>
<section class="aboutus" id="aboutus" >
<div class="container  text-center" >
<div class="row  panel panel-primary">
<div class="col-lg-4">
<img class="responsive" src="images/a/users.png">
<p class="panel panel-heading"><a href="ManageUser.php" class="btn btn-info" role="button">Manage Users</a></p>
</div>
<div class="col-lg-4" >
<img class="responsive" src="images/a/items.jpg">
<p class="panel panel-heading"><a href="ManageItem.php" class="btn btn-info" role="button">Manage Donated Items</a></p>
</div>
<div class="col-lg-4">
<img class="responsive" src="images/a/wishlist.jpg">
<p class="panel panel-heading"><a href="ManageWishlist.php" class="btn btn-info" role="button">Manage Wishlist</a></p>
</div>
</div>
<div class="row  panel panel-primary">
<div class="col-lg-4">
<img class="responsive" src="images/a/feedback.gif">
<p class="panel panel-heading"><a href="ManageReport.php" class="btn btn-info" role="button">Manage Feedback</a></p>
</div>
<div class="col-lg-4">
<img class="responsive" src="images/a/ads.png">
<p class="panel panel-heading"><a href="ManageAd.php" class="btn btn-info" role="button">Manage Advertisement</a></p>
</div>
<div class="col-lg-4">
<img class="responsive" src="images/a/w.jpg">
<p class="panel panel-heading">	<a href="ManageWebsite.php" class="btn btn-info" role="button">Manage Website</a></p>
</div>
</div>
</div>
</section>
<br><br>
<br><br></br>
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
