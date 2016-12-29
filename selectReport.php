<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
$query = "SELECT * FROM LC_Contact ORDER BY id DESC";  
$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th>Id</th>  				
<th >Email</th>  
<th >Name</th>  
<th>Contact</th> 
<th>Message</th> 
<th>Delete</th>  
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr>  
         <td>
         '.$row["Id"].'
         </td>  
         <td class="Email" data-id1="'.$row["Id"].'"  >
         '.$row["Email"].'
         </td> 
         <td class="Name" data-id2="'.$row["Id"].'" >
         '.$row["Name"].'
         </td>  
         <td class="Contact" data-id3="'.$row["Id"].'" >
         '.$row["Contact"].'
         </td>  
         <td class="Message" data-id4="'.$row["Id"].'" >
         '.$row["Message"].'
         </td>  
         <td>
         <button type="button" name="delete_btn" data-id5="'.$row["Id"].'" class="btn btn-xs btn-danger btn_delete">x</button>
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

