<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
session_start();
$id = $_POST["id"];
$id1 = $_POST["id1"];
 $query = "Select * from LC_Request WHERE  Id='".$id."'";  
 $result = mysql_query( $query );
  while($row = mysql_fetch_array($result))  
	 {
	   $query1 = "UPDATE LC_Request SET Status='A'  WHERE  Id='".$id."'";  	
				if(mysql_query($query1))  
{  
  echo 'Request accepted';  
}  
	 $query2 = "UPDATE LC_Request SET Status='R'  WHERE Itemid='".$row[Itemid]."' and Status='P'";  	
			if(mysql_query($query2))  
{  
  echo ' & Other Requested rejected for the similar Item';  
}  	
		 $query2 = "Delete from LC_Item WHERE Id='".$row[Itemid]."'";  	
			if(mysql_query($query2))  
{  
 echo ' Item removed from Item List';
}  
	 }
 $db->close();
?> 
