<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = ''; 
session_start();
$query = "SELECT * FROM LC_Request where Donor_Email='".$_SESSION['email']."' and Status='P' order by Requested, Itemid desc"; 


$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th >ItemId</th>  
<th >Seeker</th>  
<th >Requested Date</th>  
<th>Delete</th>  
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr>  
		  
         <td class="Itemid" data-id1="'.$row["Id"].'"  >
         '.$row["Itemid"].'
         </td> 
         <td class="Seeker_Email" data-id2="'.$row["Id"].'" >
         '.$row["Seeker_Email"].'
         </td>
		   <td class="Requested" data-id7="'.$row["Id"].'" >
         '.$row["Requested"].'
         </td> 
         <td>
		          <button type="button" name="delete_btn" data-id6="'.$row["Id"].'" class="btn btn-xs btn-danger btn_delete">Accept Request</button>
         </td>  
         </tr>  
         ';  
   }  
}  
else  
{  
   $output .= '<tr>  
      <td colspan="4">Data not Found</td>  
      </tr>';  
}  
$output .= '</table>  
</div>';  
echo $output;  
?>

