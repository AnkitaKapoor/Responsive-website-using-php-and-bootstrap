<?php
session_start(); 
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
<div class="container panel panel-info">
</br></br></br></br>
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Note:</b></h3>
</div>
</div>
<div class="row panel panel-body">
<div class="col-lg-12 text-center">
<h3><b>Sorry, you cannot access this page!!!<br/><br/>Please check your permissions!!!</b></h3>
</div>
</div>
</div>
<?php
include('./Footer.php');
?>