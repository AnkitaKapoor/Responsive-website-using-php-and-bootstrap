<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $page_title; ?></title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="style.php" media="screen">
</head>
<body id="page-top" class="body">
<?php
session_start();
$username = $_SESSION['username'];
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header page-scroll">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a  href="AdminProfile.php">
<img src="images/log.jpg" ></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav nav-pills navbar-right">
<li class="hidden">
<a href="#page-top"></a>
</li>
 <li class="page-scroll">
        <a href="UpdateProfile.php">
		Welcome , 
        <?php 
        print $username;
        ?></a>
        </li>
<li class="page-scroll">
<a href="ManageUser.php">Users</a>
</li>
<li class="page-scroll">
<a href="ManageItem.php">Posted Items</a>
</li>
<li class="page-scroll">
<a href="ManageWishlist.php">WishList</a>
</li>
<li class="page-scroll">
<a href="ManageReport.php">Feedback</a>
</li>
<li class="page-scroll">
<a href="ManageAd.php">Advertisement</a>
</li>
<li class="page-scroll">
<a href="ManageWebsite.php">Website</a>
</li>
<li class="page-scroll">
<a href="gm.php">Track</a>
</li>
<li class="page-scroll">
<a href="Logout.php">Log Out</a>
</li>
</ul>
</div>
</div>
</nav>
