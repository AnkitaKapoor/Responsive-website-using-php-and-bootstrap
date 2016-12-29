<?php
$email =  $_POST['email'];
$name =  $_POST['name'];
$phone =  $_POST['phone'];
$message =  $_POST['message'];
$query = "INSERT INTO LC_Contact VALUES ('','$email','$name','$phone ','$message', NOW());";
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
//$result= mysql_query( $query );

 if(mysql_query( $query ))
 {
	 session_start();
	  $_SESSION['status']=  1;
	      header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Index.php",true);
	 
 }
$db->close();
//header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Login.php",true);
exit();
?>
