<?php
session_start();
$Category =  $_POST['Category'];
$SubCategory =  $_POST['SubCategory'];
$message =  $_POST['message'];
$email = $_SESSION['email'];
$query = "INSERT INTO LC_Wishlist VALUES
('','$Category','$SubCategory','$message',NOW(),'$email')";
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$result = mysql_query( $query );
 session_start();
	  $_SESSION['w']=  1;
if(  mysql_num_rows( $result ))
{ 
   header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Wishlist.php",true);
   exit();
}
else
{
   header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Wishlist.php",true);
   exit();
}
$db->close();
?>
