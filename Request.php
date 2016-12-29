 <?php
session_start(); 
$page_title = "Manage your Request!";
if(($_SESSION['login']=1) && ($_SESSION['type']==U))
{
   include('./Header_User.php');


?>
    
	
	 <div class="container">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	 </br></br>
	  </br></br>
	
	 <form name="Request" id="Request"  action="" method="post" validate>
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center ">  
<h3 align="center">List of all Request </h3><br /> 
 
</div>
</div>
<div class="row">
<div class="col-lg-12 text-center">
<h5><b> You have to accept 1 request of 1 item and other request for that particular item will be deleted automatically</b></h5>
 </div>
 </div>
<div class="row panel panel-body">
<div class="col-lg-12 table-responsive">  
<div id="live_data1"></div>                 
</div>
</div>
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  
      $.ajax({  
url:"selectRequest.php",  
method:"POST",  
success:function(data){  
$('#live_data1').html(data);  
}  
});  
      }  
      fetch_data();  
     
      $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id6");
	
         if(confirm("Are you sure you want to accept this request?"))  
         {  
         $.ajax({  
url:"acceptRequest.php",  
method:"POST",  
data:{id:id},  
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
	  </br></br>
	 </br></br>
	   </br></br>
	 </br></br>
	   </br></br>
	 </br></br>
</div>
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