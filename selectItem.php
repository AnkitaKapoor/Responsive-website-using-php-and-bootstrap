<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
session_start();
$query = "SELECT * FROM LC_Item where Email='".$_SESSION['email']."' and Status='A' order by Id desc"; 


$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th >Image</th>  
<th >Category</th>  
<th >Subcategory</th>  
<th>Description</th> 
<th>Title</th> 
<th>Price</th>
<th>Posted Date</th>
<th>Delete</th>  
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr>  
		  <td class="ImageLink" data-id1="'.$row["Id"].'"  ><img src="'.$row["ImageLink"].'" class=img-responsive></img>
         
         </td> 
         <td class="Category" data-id1="'.$row["Id"].'"  >
         '.$row["Category"].'
         </td> 
         <td class="Subcategory" data-id2="'.$row["Id"].'" >
         '.$row["Subcategory"].'
         </td>  
         <td class="Description" data-id3="'.$row["Id"].'" contenteditable >
         '.$row["Description"].'
         </td>  
         <td class="Title" data-id4="'.$row["Id"].'" contenteditable >
         '.$row["Title"].'
         </td>  
		  <td class="Price" data-id5="'.$row["Id"].'" contenteditable >
         '.$row["Price"].'
         </td> 
		   <td class="Posted" data-id7="'.$row["Id"].'"  >
         '.$row["Posted"].'
         </td> 
         <td>
		          <button type="button" name="delete_btn" data-id6="'.$row["Id"].'" class="btn btn-xs btn-danger btn_delete">x</button>
         </td>  
         </tr>  
         ';  
   }  
}  
else  
{  
   $output .= '<tr>  
      <td colspan="8">Data not Found</td>  
      </tr>';  
}  
$output .= '</table>  
</div>';  
echo $output;  
?>

