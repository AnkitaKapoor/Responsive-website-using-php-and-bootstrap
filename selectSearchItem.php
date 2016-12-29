<?php  
include('./connect_to_db.php');
 session_start();
$usern = $_SESSION['usern'];
$db = new Connection();
$db->connect();
$output = '';  
session_start();
if($usern!= null)
{
	$query = "SELECT * FROM LC_Item where Status='A' and Email='".$usern."' order by Id desc"; 
}
else
{
	$query = "SELECT * FROM LC_Item where Status='A' order by Id desc"; 
}



$result = mysql_query( $query );
$output .= '  
<div class="table-responsive">  
<table class="table table-bordered">  
<tr>
<th>Images</th>
<th >Item Details</th>  
  <th>Donors Details</th>
  <th>Request</th>
</tr>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  
         <tr> 
          <td>
		    <img src="'.$row["ImageLink"].'" class=img-responsive></img>
		  </td>	
         <td >	  
		 <b>Category :</b> '.$row["Category"].' </br>
		 <b>Subcategory :</b> '.$row["Subcategory"].'  </br>
              <b>Title :</b> '.$row["Title"].'</br>
			  <b>Price :</b> '.$row["Price"].'</br>
			  <b>Description :</b> '.$row["Description"].'</br>
        <b>Posted On :</b> '.$row["Posted"].'</br>
         </td> 
            
 		          ';  
		 
$query1 = "SELECT * FROM LC_User where Email='".$row["Email"]."'"; 
$result1 = mysql_query( $query1 ); 
 while($row1 = mysql_fetch_array($result1))  
   {  
      $output .= '  
          <td ><b>Name :</b> '.$row1["Name"].'
         </br><b>Address :</b> '.$row1["Address"].'
        </br><b>Contact :</b> '.$row1["Contact"].'
        </br><b>Email :</b> '.$row1["Email"].'
		</br><b>Rating :</b> '.$row1["Rating"].'
		 </br>
         </td>  <td ><b>No. Of Request:</b>  '.$row["Numrequest"].'	</br> </br>          '; 
		
		if($_SESSION['username']!=null) 
		{			
	
		 	$output .= ' <button type="button" name="delete_btn" data-id6="'.$row["Id"].'" class="btn btn-xs btn-danger btn_delete">Request</button>';
			 
			
		}
		  
		 $output .= ' </td></tr>	 '; 
   }
		 
		 
   }  
   //}
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

