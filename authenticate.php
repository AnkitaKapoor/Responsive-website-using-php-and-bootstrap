<?php
$email =  $_POST['email'];
$password =  $_POST['password'];
$query = "select * FROM LC_User WHERE Email = '$email'AND Password = '$password'";
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$result = mysql_query( $query );
$db->close();
if(  mysql_num_rows( $result ))
{ 
   while($row = mysql_fetch_array( $result ))
   {
      session_start();
      $_SESSION['username']=  $row['Name'];
      $_SESSION['email']=  $row['Email'];
      $_SESSION['login']=1;
      $_SESSION['type']= $row['TYPE'];
        if( $_SESSION['type']==A)
      {
         header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/AdminProfile.php",true);
      }
      else
      {
         header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/UserProfile.php",true);
      }
        }
}
else
{
	session_start();
	  $_SESSION['sta']=  3;
     header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Login.php",true);
  }
?>
