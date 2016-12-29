<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$query = "DELETE FROM ".$_POST["tname"]." WHERE Email= '".$_POST["id"]."'"; 
if(mysql_query($query))  
{  
   echo 'Data Deleted';  
   $query1 = "DELETE FROM LC_Item WHERE Email= '".$_POST["id"]."'";
   if(mysql_query($query1))  
{  
   echo ' & Items posted by this user are also Deleted';  
  
} 
} 
 
$query2 = "DELETE FROM LOCATIONS WHERE username= '".$_POST["id"]."'";
  mysql_query($query2);
$db->close();
?>  
