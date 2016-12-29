<?php
session_start(); 
$page_title = "Give Feedback!";
if(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');
?>
 <div class="container">
	 <br><br> <br><br>
	<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Feedback</b></h3>
</div>
</div>
<div class="row panel panel-body  ">
<form name="sentMessage" id="contactForm"  action="addFeedback.php" method="post" validate>
<div class="col-lg-5">
<label>List of Donors:</label>
<div class="dropdown">
 
<?php
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
session_start();
$username = $_SESSION['username'];
$query = "SELECT Email,Name FROM LC_User where NAME != '".$username."' AND Type !='A' Order by Name asc";  
$result = mysql_query( $query );
$output .= '  
<select name="User" id="User">';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= ' <option value="'.$row["Email"].'" required>'.$row["Name"].' ('.$row["Email"].')</option>';
   }  
   }  
else  
{  
  $output .= '</select>';    
}  
$output .= '</select>'; 
echo $output;  
?>
</div>
</div>
<div class="col-lg-3">
<label>Provide Rating:</label></br>
<INPUT TYPE="radio" NAME = "rating" VALUE = "5" required><img src="images/5star.jpg" class="img-responsive"></input>
<INPUT TYPE="radio" NAME = "rating" VALUE = "4" required><img src="images/4star.jpg" class="img-responsive"></input>
<INPUT TYPE="radio" NAME = "rating" VALUE = "3" required><img src="images/3star.jpg" class="img-responsive"></input>
<INPUT TYPE="radio" NAME = "rating" VALUE = "2" required><img src="images/2star.jpg" class="img-responsive"></input>
<INPUT TYPE="radio" NAME = "rating" VALUE = "1" required><img src="images/1star.jpg" class="img-responsive"></input>
</div>
<div class="col-lg-4 text-center">
<label>Feedback</label>
<textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea></br>
<button type="submit" id="sub" name="sub"  class="btn btn-success btn-lg">Submit</button>
<button  class="btn btn-cancel btn-lg">Cancel</button>
</div>
</form>
</div>
<?php
if(isset($_SESSION['f']) && $_SESSION['f']==1) 
{
	?>
<div class="row">
<div class="form-group col-xs-12 text-center">
<label>Your feedback has been successfully posted!!!</label>
</div>
</div>
<?php
}
session_start();
$_SESSION['f']= 0;
?>
</div>

	 </br></br>
	   </br></br>
	 </br></br>
	   </br></br>
	 </br></br>	 </br></br>
	   </br></br>
	 </br></br>
	   </br></br>
	 </br></br>
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
