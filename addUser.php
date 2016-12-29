<?php
$name =  $_POST['name'];
$nickname =  $_POST['nickname'];
$address =  $_POST['txtautocomplete'];
$contact =  $_POST['contact'];
$email =  $_POST['email'];
$password =  $_POST['password'];
$cpassword =  $_POST['cpassword'];
$sex =  $_POST['sex'];
$la =  $_POST['lati'];
$lo =  $_POST['longi'];


$query = "select * FROM LC_User WHERE Email = '$email'";
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$result = mysql_query( $query );
if( mysql_num_rows( $result ))
{ 
 session_start();
	  $_SESSION['status']=  2;
   header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Registration.php",true);
     exit();
}
else
{
	 session_start();
	  $_SESSION['status']=  1;
   $query = "INSERT INTO LC_User VALUES('$email','$name','$nickname','$sex' ,'$address' ,'$contact','$password', NOW(),'U','0')";
      mysql_query( $query );
	  $query1 = "INSERT INTO LOCATIONS( username, latitude, longitude, Address ) VALUES( '$email','$la','$lo','$address')";
	  mysql_query( $query1 );
	  
   $db->close();
   header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect/Login.php",true);
   exit();
}


	
?>
