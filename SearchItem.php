 <?php
   session_start();  
   $_SESSION['usern'] = $_GET['id'];
$page_title = "Search Item!";   
   if(($_SESSION['login']=1) && ($_SESSION['type']==A))
   {
		include('./Header_Admin.php');
   }
  elseif(($_SESSION['login']=1) && ($_SESSION['type']==U))
   {
		include('./Header_User.php');
   }
    else
   {
		include('./Header.php');
   }
?>
<div class="container">
</br></br>	  </br></br>
<div class="container panel panel-info">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	
	<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>List of all Searched Items</b></h3>
</div>
</div>
<div class="row panel panel-body">
	
	  <form name="PostItem" id="PostItem"  method="post"validate>


<div class="col-lg-12 table-responsive">  
 <div id="live_data1"></div>     
   <div id="live_data2"></div>          
</div>  
</div>  
</div>
<script>
	 $(document).ready(function(){  
      function fetch_data()  
      {  
	 
	             $.ajax({  
                url:"selectSearchItem.php",  
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
         if(confirm("Are you sure you want to request this?"))  
         {  
         $.ajax({  
url:"makeRequest.php",  
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
	   
 }
 
 
 
 );  
 
 
 
 
 </script>


</div>

</br></br>	  </br></br></br></br>	  </br>
		

</form>

	<?php
include('./Footer.php');
?>