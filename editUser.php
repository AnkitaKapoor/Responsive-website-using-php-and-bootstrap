<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
echo 'Data ';  
$email = $_POST["id"];  
$text = $_POST["text"];  
$column_name = $_POST["column_name"];  
$query = "UPDATE LC_User SET ".$column_name."='".$text."' WHERE Email='".$email."'";  
if(mysql_query($query))  
{  
   echo 'Data Updated';  
}  
$db->close();
?> 
