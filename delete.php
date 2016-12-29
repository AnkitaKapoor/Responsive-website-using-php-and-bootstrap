<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$query = "DELETE FROM ".$_POST["tname"]." WHERE Id = '".$_POST["id"]."'"; 
if(mysql_query($query))  
{  
   echo 'Data Deleted';  
}  
$db->close();
?>  
