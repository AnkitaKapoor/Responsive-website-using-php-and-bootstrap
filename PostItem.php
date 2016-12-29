<?php
session_start(); 
$page_title = "Post your Item!";
if(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');


?>
    
	 <div class="container">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	 <br><br>
	 <br><br>
	 		 <div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Post Item</b></h3>
</div>
</div>
	
	 <form name="PostItem" id="PostItem"  action="addItem.php" method="post" validate>
<div class="row p">

<div class="col-lg-6">
<label>Select Category:</label></br>
<?php  
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
session_start();
$output = '';  
$query = "SELECT distinct Category FROM LC_Category";  
$result = mysql_query( $query );
$output .= '  
<select name="Category" id="Category" Onchange="get_sc(this.value);" >
<option value="0" required>Select Category..</option>';  
if(mysql_num_rows($result) > 0)  
{  
   while($row = mysql_fetch_array($result))  
   {  
      $output .= '  <option value="'.$row['Category'].'" >  '. $row['Category'].' </option>';

   }  
   
}  
else  
{  
  $output .= '</select>';    
}  
$output .= '</select>'; 
echo $output; 
?>  
  </div>
  <div class="col-lg-6">
 
  <label>Select SubCategory:</label><div id="get_state"> </div>
  </div>
  
  </div>
  </br>
  <div class="row ">
    <div class="col-lg-8">
    <label>Description</label>
<textarea rows="5" class="form-control" placeholder="Description" name="Description" id="Description" required data-validation-required-message="Please enter a message."></textarea>
  </div>
   <div class="col-lg-4">
     <label>Title</label> 
<input type="text" class="form-control" placeholder="Title" name = "Title" id="Title" required data-validation-required-message="Please enter your name.">
   
</br>

 <label>Price</label> 
<input type="text" class="form-control" placeholder="Price" name = "Price" id="Price" required data-validation-required-message="Please enter your name.">
 


  </div>
    </div>
	<br /> 
	<div class="row ">
<div class="col-lg-6">	 <label>File:</label> <input type="file" id="image" name="image"></div>
  <div class="col-lg-6 text-center">
  <button type="submit" id="sub" name="sub"  class="btn btn-success btn-lg">Submit</button>
<button  class="btn btn-cancel btn-lg">Cancel</button>

    </div>

</div>


  
	
	<script type="text/javascript">
function get_sc(a) {

	// Call to ajax function
	 var id=a;
    $.ajax({
        type: "POST",
        url: "cat.php", // Name of the php files
        data: {id:id},
        success: function(html)
        {
            $("#get_state").html(html);
        }
    });
}
</script> 

	
	
 
<br />  
<br />  
</div>

<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>List of all Posted Items</b></h3>

</div>
</div>
<div class="row">
<div class="col-lg-12 text-center">
<h5><b> You can edit description, title and Price of your Posted Item and also you can delete item</b></h5>
 </div>
 </div>
<div class="row panel panel-body">
<div class="col-lg-12 table-responsive" >
<div id="live_data1"></div>                 
</div>  
</div>  
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  

      $.ajax({  
url:"selectItem.php",  
method:"POST",  
success:function(data){  
$('#live_data1').html(data);  
}  
});  
      }  
      fetch_data();  
      $(document).on('click', '.btn_delete', function(){  
         var tname="LC_Item";
         var id=$(this).data("id6");
         if(confirm("Are you sure you want to delete this?"))  
         {  
         $.ajax({  
url:"delete.php",  
method:"POST",  
data:{id:id, tname:tname},  
dataType:"text",  
success:function(data){  
alert(data);  
fetch_data();  
}  
});  
         }  
}); 
function edit_data(id, text, column_name)  
{  
   var tname="LC_Item";
   $.ajax({  
url:"edit.php",  
method:"POST",  
data:{id:id, text:text, column_name:column_name,tname:tname},  
dataType:"text",  
success:function(data){  
alert(data);  
}  
});  
}  
$(document).on('blur', '.Description', function(){  
      var id = $(this).data("id3");  
      var Description = $(this).text();  
      edit_data(id,Description, "Description");  
      });
	  $(document).on('blur', '.Title', function(){  
      var id = $(this).data("id4");  
      var Title = $(this).text();  
      edit_data(id,Title, "Title");  
      });
	  $(document).on('blur', '.Price', function(){  
      var id = $(this).data("id5");  
      var Price = $(this).text();  
      edit_data(id,Price, "Price");  
      });
});  
</script>  
</div>
</form>
	
	</div>
	

<?php
}
else
{
   
   header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/Access.php",true);
   
}
?>
<?php
include('./Footer.php');
?>