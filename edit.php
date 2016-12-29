<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$id = $_POST["id"];  
$text = $_POST["text"];  
$column_name = $_POST["column_name"];  
$query = "UPDATE ".$_POST["tname"]." SET ".$column_name."='".$text."' WHERE Id='".$id."'";  
if(mysql_query($query))  
{  
   echo 'Data Updated';  
}  
$db->close();
?> 
