<?php
session_start(); 
$page_title = "Manage Report!";
if(($_SESSION['login']=1) && ($_SESSION['type']==A))
{
   include('./Header_Admin.php');


?>
<div>
<br><br>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<div class="container panel panel-info">
</br></br>
<div class="row panel panel-heading">	
<div class="col-lg-12 text-center">
<h3 align="center">List of all Compliments & Complaints   </h3><br />  
</div>  
</div>
 <div class="row panel panel-body">	
<div class="col-lg-12">
<div id="live_data"></div>   
</div>  
</div>




 
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  
      $.ajax({  
url:"selectReport.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
      }  
      fetch_data();  
      $(document).on('click', '.btn_delete', function(){  
         var tname="LC_Contact";
         var id=$(this).data("id5");
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
});  
</script>  
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
