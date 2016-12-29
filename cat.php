<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
session_start();
$query = "SELECT distinct Subcategory FROM LC_Category where Category ='".$_POST["id"]."'"; 
$result = mysql_query( $query );
$output .= '  
<select name="SubCategory" >
<option value="Select" required>Select Subcategory..</option>';  
 if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  <option value="'.$row['Subcategory'].'" > '. $row['Subcategory'].'</option>';
   }  
   }  
else  
{  
  $output .= '</select>';    
} 
  $output .= '</select>'; 
echo $output;  
?>  


