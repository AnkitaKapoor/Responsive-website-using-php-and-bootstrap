<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
$query = "SELECT * FROM LC_Advertisement ORDER BY id DESC";  
$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th >Name</th>  
<th>Text</th> 
<th>Delete</th>  
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr>  
         <td class="Name" data-id1="'.$row["Id"].'"  >
         '.$row["Name"].'
         </td> 
         <td class="Text" data-id2="'.$row["Id"].'" contenteditable>
         '.$row["Text"].'
         </td>  
         <td>
         <button type="button" name="delete_btn" data-id3="'.$row["Id"].'" class="btn btn-xs btn-danger btn_delete">x</button>
         </td>  
         </tr>  
         ';  
   }  
}  
else  
{  
   $output .= '<tr>  
      <td colspan="6">Data not Found</td>  
      </tr>';  
}  
$output .= '</table>  
</div>';  
echo $output;  
?>  

