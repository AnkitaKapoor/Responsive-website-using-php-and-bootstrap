<?php
session_start(); 
$page_title = "Manage Advertisement!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<form method="POST" action="ManageAd.php" enctype="multipart/form-data">

<div class = "container panel panel-info">
</br>
</br>
</br></br>
<div class="row panel panel-heading">	
<div class="col-lg-12 text-center">
<h3 align="center">Manage Advertisements  </h3><br />  
</div>  
</div>

<div class="row panel panel-body">
<div class="col-lg-4 text-right" >	 <label>File:</label> 	</div>
<div class="col-lg-4"><input type="file" name="image" required></div>
<div class="col-lg-4"> <input type="submit" name="submit" value="Upload"></div>
</div>

<div class="row">
<div class="col-lg-12">
<label>Caption</label><textarea rows="5" class="form-control" id="message" name="message"required data-validation-required-message="Please enter a message."></textarea>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<?php
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$file=$_FILES['image']['tmp_name'];
if(!isset($file))
{
   echo '<p>Please select a file</p>';
}
else
{
   $mess=  $_POST["message"];
   $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
   $image_name=addslashes($_FILES['image']['name']);
   $image_size=getimagesize($_FILES['image']['tmp_name']);
   if($image_size==FALSE)
   {
      echo "That's not an image.";
   }
   else
   {
      if(!$insert=mysql_query("INSERT INTO LC_Advertisement(Image, Name, Text)VALUES('{$image}', '{$image_name}','$mess')"))
      {
         echo"Problem uploading image.";
      }
      else
      {
         echo $mess;
         $lastId=mysql_insert_Id();
         echo"image uploaded. <p/>Your image: </p><img class=img-responsive src=get.php?Id=$lastId >  ";
      }
   }
}
?>
</div></div>
</div>
</br>
<div class = "container panel panel-info">
<div class="row  panel panel-heading">
<div class="col-lg-12">
<h3 align="center">List of all Advertisements  </h3><br />  
</div></div>
<div class="row  panel panel-body">
<div class="col-lg-12">
<div class="table-responsive">  

<div id="live_data"></div>                 
</div>  
</div></div>
</div>	
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  
      $.ajax({  
url:"getads.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
      }  
      fetch_data();
      $(document).on('click', '.btn_delete', function(){  
         var id=$(this).data("id3");
         var tname="LC_Advertisement";
         if(confirm("Are you sure you want to delete this?"))  
         {  
         $.ajax({  
url:"delete.php",  
method:"POST",  
data:{id:id,tname:tname},  
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
   var tname="LC_Advertisement";
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
$(document).on('blur', '.Text', function(){  
      var id = $(this).data("id2");  
      var Name = $(this).text();  
      edit_data(id,Name, "Text");  
      });  
});
</script>

</form>
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
