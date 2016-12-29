<?php
session_start(); 
$page_title = "Update your Profile!";
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

<script language="JavaScript">
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}
</script>
<div class = "container">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<br>
<br>
<br><br>
<br>
<form method="POST" action="UpdateProfile.php" enctype="multipart/form-data">
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Personal Details</b></h3>
</div>  
</div>
<div class="row ">
<div class="col-lg-12 text-center">
    <h5><b>Click the relevant textbox to update your details.</b></h5>           
</div>  
</div>
<div class="row panel panel-body">
<div class="col-lg-12 table-responsive">
<div id="live_data"></div>                 
</div>  
</div>

<div class="row ">
<div class="col-lg-12 text-center">

<input type="button" onClick="location.href='gm.php'" value="Upload your location and view all users location!"></input>   

</div> 
</br>
</div>  
</div>



</div>	
<script>  
$(document).ready(function(){  
      function fetch_data()  
      {  
	       $.ajax({  
url:"selectProfile.php",  
method:"POST",  
success:function(data){  
$('#live_data').html(data);  
}  
});  
      }  
      fetch_data();
      function edit_data(id, text, column_name)  
      {  
      $.ajax({  
url:"editUser.php",  
method:"POST",  
data:{id:id, text:text, column_name:column_name},  
dataType:"text",  
success:function(data){  
alert(data);  
}  
});  
}

$(document).on('blur', '.NickName', function(){  
      var id = $(this).data("id3");  
      var NickName = $(this).text();  
      edit_data(id,NickName, "NickName");  
      });  
$(document).on('blur', '.sex', function(){  
      var id = $(this).data("id4");  
      var sex = $(this).text();  
      edit_data(id,sex, "sex");  
      });  

$(document).on('blur', '.Contact', function(){  
      var id = $(this).data("id6");  
      var Contact = $(this).text();  
      edit_data(id,Contact, "Contact");  
      });  
$(document).on('blur', '.Password', function(){  
      var id = $(this).data("id7");  
      var Password = $(this).text();  
      edit_data(id,Password, "Password");  
      });  	  

	  	  
	  
	  
	  });
</script>


</div>
</form>
<?php
include('./Footer.php');
?>
