<?php
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
session_start();
$email= $_SESSION['email'];
$rating = $_POST['rating'];
$User = $_POST['User'];
$message = $_POST['message'];
 
  $query = "INSERT INTO LC_Feedback VALUES ('','$email','$User','$rating','$message' ,NOW())";
$result = mysql_query( $query );
 session_start();
	  $_SESSION['f']=  1;
 $query1 = "select Rating FROM LC_Feedback WHERE U_Email = '$User'";
 $result1 = mysql_query( $query1 );
 $count=0;
 if(  mysql_num_rows( $result1 ))
{ 
   while($row1 = mysql_fetch_array( $result1 ))
   {
	   $tot += $row1['Rating'];
	   $count++;  
   }
}
$avge=round($tot/$count);
 $query2 = "UPDATE LC_User SET Rating='".$avge."' WHERE Email='".$User."'";  
  $result2 = mysql_query( $query2 );
$db->close();
header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Feedback.php",true);
?>