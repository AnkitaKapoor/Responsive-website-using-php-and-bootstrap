<?php
session_start(); 
$page_title = "Create Wishlist!";
if(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');


?>
<div class="container">
<br><br>
<br><br>

<div class="row">
<form action="addWishlist.php" method="POST">
<section class="aboutus" id="aboutus" >
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Wishlist</b></h3>
</div>
</div>
<div class="row ">
<div class="col-lg-6">
<label>Category</label>
</div>
<div class="col-lg-6">
<label>Sub-Category</label>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<input type="text" class="form-control" placeholder="Category"  name="Category" id="Category" required data-validation-required-message="Please enter Category.">
</div>
<div class="col-lg-6">
<input type="text" class="form-control" placeholder="Sub-Category" name="SubCategory"id="SubCategory" required data-validation-required-message="Please enter Sub-Category.">
</div>
</div>
</br>
<div class="row">
<div class="col-lg-12">
<label>Description</label><textarea rows="3"  placeholder="Enter brief description." class="form-control" id="message" name="message"required data-validation-required-message="Please enter a message."></textarea>
</div>
</div>
</br>
<div class="row">
<div class="col-lg-12 text-center">
<button type="submit" class="btn btn-success btn-lg">Submit</button>
<button type="reset" class="btn btn-reset btn-lg">Reset</button>
</div>
</div>
<?php
if(isset($_SESSION['w']) && $_SESSION['w']==1) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>Your WishList Item has been successfully posted!!!</label>
</div>
</div>
<?php
}
session_start();
$_SESSION['w']= 0;
?>
</br>
</div></section>
</div>
</br>

<div class="row">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<div class="container panel panel-info">  
<div class="row panel panel-heading"> 
 <div class="col-lg-12 text-center">
<h3 align="center">List of all Wish Items  </h3><br />  
</div></div>
<div class="table-responsive row"> 
 <div class="col-lg-12 ">
<div id="live_data"></div>                 
</div>  
</div>  
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  
      $.ajax({  
url:"UserWishlist.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
      }  
      fetch_data();  
      });  
</script>  
</div>
</div>

<br><br>

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
