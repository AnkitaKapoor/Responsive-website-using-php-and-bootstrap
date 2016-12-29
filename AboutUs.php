<?php
session_start(); 
$page_title = "About Us";

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
<h3><b>About Us</b></h3>
</div>
</div>
<div class="row ">
<div class="col-lg-4 ">
<img src="images/images.jpg" class="img-responsive" alt="">
</div>      
<div class="col-lg-8 panel panel-body">
<h3><b>Welcome to Let’s connect!</b></h3>
<h5><b>We thought you might like to know a bit more of what we're all about.</b></h5>
</br>
<p >The let’s connect website (or tool) is created for a company called let’s connect pty ltd. It is a tool to help people connect during times of crisis, such as natural disasters. During such times, we wish to connect people who need specific help with people who can and want to give that specific help.</p>
<p>The let’s connect website is not an auction site and people do not buy or sell via the site; the Website simply aims to connect donors with those in need and buyers with sellers. Our aim at let’s connect  is to help people connect givers and receivers , that is, to connect donors to those in need, perhaps just to connect people to members of aid organizations. A website is one such possible mediator to help people get connected. </p>
</div>  
</div>
<div class="row ">
<div class="col-lg-12">
<h5><b>How Let’s connect works!</b></h5>								 
<p>Let’s connect connects those who have with those who need, in a safe and private way. Through let’s connects website, donors are able to list their items either for free or at a very low price. These items are listed and are available for seekers from where they can request exactly what is needed by them. These requests are listed on the donor’s side, where he can donate in response. Alternatively, seekers can add items in wish list if they don’t find any item of their need. When a need is matched to a donation, the let’s connect portal allows to exchange the donor and seeker nominated contact details. Then, the seeker and donor agree between themselves on a delivery option.</p>
</br>								
<h5><b>Our Vision!</b></h5>
<p>
<ul>
<li>We believe all people have a right to good quality items. Even the simplest items can have a significant impact on a family or individual's standard of living. </li>
<li>We request new, or quality used products for people in need - things that you would like to receive yourself!</li>
<li>We build trust, act with integrity and show respect.</li>
<li>We truly appreciate our volunteers, donors and supporters.</li>
</ul> 
</p>
</br>
<h5><b>If you are a donor!</b></h5>
<p>
<ul>
<li>You need to register.</li>
<li>List your items in appropriate category list.</li>
<li>View your dashboard for pending request for your items and accept the request.</li>
<li> View wish list for items needed to see what items are currently needed in your local community (the list is updated instantly!)</li>
<li>Please remember we only accept quality items</li>
</ul>
</p>
</br>
<h5><b>If you are a seeker!</b></h5>
<p>
<ul>
<li>You don’t need to log in to search an item.</li>
<li>You are able to request any essential item that you may need for your service after log in. The request will be reviewed by the donor and listed on our request list.</li>
</ul>
</p>
</br>
<h5><b>Here's some official stuff!</b></h5>
<p>
<ul>
<li>We love feedback from you; if you have any suggestion or complaint for us then simply leave a message. Please click <a href="Index.php#contact">here</a> to visit our contact us section.</li>

</p>
</br>
<p>Thanks for now,</br>
<h5><b>Let's connect pty ltd </b></h5>
</p>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
<?php
include('./Footer.php');
?>
