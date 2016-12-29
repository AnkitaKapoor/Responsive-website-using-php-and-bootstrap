<?php
session_start(); 
$page_title = "Manage Website!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');


?>

<form method="POST" action="editWebsite.php" name="ManageWebsite" >


<div class="container panel panel-info">
</br></br></br></br>
<div class="row panel panel-heading">	
<div class="col-lg-12 text-center">
<h3 align="center">Select Your Preference for the Website theme   </h3><br />  
</div>  
</div>

<div class="row ">
<div class="col-lg-12 text-center">
<h2></h2>
</div></div><div class="row">
<div class="col-lg-12 text-center">
<h2><img src="images/y.jpg" class="img-responsive" alt=""></h2>
</div>
</div>
<div class="row ">
<div class="col-lg-4 text-right">Table Heading colour:
</div>
<div class="col-lg-8 "><INPUT TYPE="radio" NAME = "rating" VALUE = "#d9edf7" required>Default</input>  <INPUT TYPE="radio" NAME = "rating" VALUE = "yellow" required>Yellow</input>  <INPUT TYPE="radio" NAME = "rating" VALUE = "pink" required>Pink</input>  <INPUT TYPE="radio" NAME = "rating" VALUE = "red" required>Red</input>  <INPUT TYPE="radio" NAME = "rating" VALUE = "purple" required>Purple</input>  <INPUT TYPE="radio" NAME = "rating" VALUE = "green" required>Green</input>  <INPUT TYPE="radio" NAME = "rating" VALUE = "blue" required>Blue</input>
</div>


</div>

<div class="row ">
<div class="col-lg-4 text-right">Menu Bar colour:
</div>
<div class="col-lg-8 "><INPUT TYPE="radio" NAME = "mb" VALUE = "#222" required>Default</input>  <INPUT TYPE="radio" NAME = "mb" VALUE = "yellow" required>Yellow</input>  <INPUT TYPE="radio" NAME = "mb" VALUE = "pink" required>Pink</input>  <INPUT TYPE="radio" NAME = "mb" VALUE = "red" required>Red</input>  <INPUT TYPE="radio" NAME = "mb" VALUE = "purple" required>Purple</input>  <INPUT TYPE="radio" NAME = "mb" VALUE = "green" required>Green</input> <INPUT TYPE="radio" NAME = "mb" VALUE = "blue" required>Blue</input>
</div>
</div>

<div class="row panel panel-body text-center">

<div class="col-lg-12"> <input type="submit"class="btn btn-success btn-lg" name="submit" value="Update"></div>
</div>

</div>
<br><br>

</form>

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