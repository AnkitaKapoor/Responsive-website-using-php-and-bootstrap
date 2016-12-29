<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
$query = "SELECT * FROM LC_Wishlist ORDER BY Id DESC";  
$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th>Category</th>  
<th>Sub-Category</th> 
<th>Description</th>
<th>Posted By</th>
<th>Posted Date</th> 
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr>  
         <td class="Category" data-id1="'.$row["Id"].'" >
         '.$row["Category"].'
         </td>  
         <td class="Subcategory" data-id2="'.$row["Id"].'" >
         '.$row["Subcategory"].'
         </td>  
         <td class="Description" data-id3="'.$row["Id"].'" >
         '.$row["Description"].'
         </td>  
         <td class="Email" data-id4="'.$row["Id"].'" >
         '.$row["Email"].'
         </td>  
         <td class="Posted" data-id5="'.$row["Id"].'" >
         '.$row["Posted"].'
         </td> 
         </tr>  
         ';  
  }  
}  
else  
{  
   $output .= '<tr>  
      <td colspan="5">Data not Found</td>  
      </tr>';  
}  
$output .= '</table>  
</div>';  
echo $output;  
?>  

