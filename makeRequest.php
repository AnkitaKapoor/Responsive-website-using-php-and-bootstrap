<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
session_start();
$id = $_POST["id"];
$email= $_SESSION['email'];  
 $query = "Select * from ".$_POST["tname"]." WHERE Id='".$id."'";
 $result = mysql_query( $query );
  while($row = mysql_fetch_array($result))  
	 {
		  $newreq= $row["Numrequest"] +1;
	  $donor=$row["Email"];
	  $query1 = "UPDATE ".$_POST["tname"]." SET Numrequest='".$newreq."' WHERE Id='".$id."'";  
if(mysql_query($query1))  
{  
  echo 'Data Updated';  
}  
		  $query2 = "INSERT INTO LC_Request VALUES ('','$id','$donor','$email ','P',NOW());";
	if(mysql_query($query2))  
{  
  echo ' & Request Send';  
} 
   }
 $db->close();
?> 
