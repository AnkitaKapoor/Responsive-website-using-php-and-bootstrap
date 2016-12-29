<?php
session_start(); 
$page_title = "Manage User!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');


?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<div class="container">  
<br />  
<br />  
<br />  

<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>List of all Users</b></h3>
</div>
</div>
<div class="row panel panel-body">
<div class="col-lg-12 ">
<div id="live_data"></div>                 
</div>  
</div>  
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  
      $.ajax({  
url:"selectUser.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
      }  
      fetch_data();  
      $(document).on('click', '.btn_delete', function(){  
         var tname="LC_User";
         var id=$(this).data("id5");
         if(confirm("Are you sure you want to delete this?"))  
         {  
         $.ajax({  
url:"deleteUser.php",  
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
});  
</script>  
</div>
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
