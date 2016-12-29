<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$email = $_POST["email"];  
$pass = $_POST["pass"];  

$query = "select * FROM LC_User WHERE Email = '$email'";

$result = mysql_query( $query );
if( mysql_num_rows( $result ))
{ 
$query1 = "UPDATE LC_User SET Password='".$pass."' WHERE Email='".$email."'";  
if(mysql_query($query1))  
{  
session_start();
	  $_SESSION['pass']=  1;
 header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Login.php",true);   
} 
}
else
{
	session_start();
	  $_SESSION['pass']=  4;
 header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/ForgetPassword.php",true);  
	
}	

$db->close();
?> 
