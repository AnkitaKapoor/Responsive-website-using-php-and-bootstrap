<?php
session_start();   
$page_title = "Login Page!";
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
<br><br>
<br><br>
<div class="container">
<div class="row">
<section class="aboutus" id="aboutus" >
<div class="container panel panel-info" >
<div class="row panel panel-heading">
<div class="col-lg-12 text-center">
<h3><b>Usage Policy</b></h3>
</div>
</div>
<div class="col-lg-12 panel panel-body">
<p>

To use the Services, you must be over 18 years old. You agree that you will post in the appropriate category or area and you agree that you will not do any of the following bad things:<br>

! violate any laws or the Posting Rules;<br>
! post any threatening, abusive, defamatory, obscene or indecent material;<br>
! be false or misleading;<br>
! infringe any third-party right;<br>
! distribute or send communications that contain spam, chain letters, or pyramid schemes;<br>
! distribute viruses or any other technologies that may harm Gumtree, the Services or the interests or property of Gumtree users;<br>
! impose an unreasonable load on our infrastructure or interfere with the proper working of the Services;<br>
! copy, modify, or distribute any other person’s content without their consent;<br>
! use any robot spider, scraper or other automated means to access the Services and collect content for any purpose without our express written permission;<br>
! harvest or otherwise collect information about others, including email addresses, without their consent;<br>
! bypass measures used to prevent or restrict access to the Services.<br>

By using the Services, you agree to the collection, transfer, storage and use of your personal information.Let's Connect grants you the right to use the Application only for your personal use. You must comply with all applicable laws and third party terms of agreement when using the Application. </p>
</div>
</div>
</div>
</div>
</div>
<?php
include('./Footer.php');
?>