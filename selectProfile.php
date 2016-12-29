<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$output = '';  
session_start();
$Email= $_SESSION['email'];
$query = "SELECT * FROM LC_User WHERE Email='".$Email."'";  
$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th >Email</th>  
<th >Name</th>  
<th >NickName</th>  
<th>Gender</th> 
<th>Address</th> 
<th>Contact</th>  
<th>Password</th> 
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
         <td class="NickName" data-id3="'.$row["Email"].'"contenteditable >
         '.$row["NickName"].'
         </td>  
         <td class="sex" data-id4="'.$row["Email"].'"contenteditable >
         '.$row["sex"].'
         </td>  
         <td class="Address" data-id5="'.$row["Email"].'" >
         '.$row["Address"].'
        </td>  
         <td class="Contact" data-id6="'.$row["Email"].'"contenteditable >
         '.$row["Contact"].'
         </td>  
         <td class="Password" data-id7="'.$row["Email"].'"contenteditable >
         '.$row["Password"].'
         </td> 
		 </tr>
		  <tr>
 <td colspan="7" class="text-center">
         <button type="button" name="delete_btn" data-id12="'.$row["Email"].'" class="btn btn-xs btn-success ">Update your changes</button>
         </td> 		 
        </tr> 
		 	
		';  
   }  
}  
else  
{  
   $output .= '<tr>  
      <td colspan="7">Data not Found</td>  
      </tr>';  
}  
$output .= '</table>  
</div>';  
echo $output;  
?>  

