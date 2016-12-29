<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
$query = "SELECT * FROM LC_User";  
$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th >Email</th>  
<th >Name</th>  
<th>Contact</th> 
<th>Joined Date</th> 
<th>Delete</th>  
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr>  
         <td class="Email" data-id1="'.$row["Email"].'"  >
         '.$row["Email"].'
         </td> 
         <td class="Name" data-id2="'.$row["Email"].'" >
         '.$row["Name"].'
         </td>  
         <td class="Contact" data-id3="'.$row["Email"].'" >
         '.$row["Contact"].'
         </td>  
         <td class="Joined" data-id4="'.$row["Email"].'" >
         '.$row["Joined"].'
         </td>  
         <td>
         <button type="button" name="delete_btn" data-id5="'.$row["Email"].'" class="btn btn-xs btn-danger btn_delete">x</button>
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

