
<?php
session_start(); 
 include('./Header_User.php');
 include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$Email= $_SESSION['email'];
$query = "SELECT * FROM LC_User WHERE Email = '$Email'";  
$result = mysql_query( $query );
$row = mysql_fetch_array($result);  
$lc=  $row['Address'];
?>
<div class="container">
<br><br>
<br><br>
<div class="row">
<div class="container text-center" >
 
 <iframe class="img-responsive" width="100%" height="100%" frameborder="0" scrolling="no" src="https://www.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo"$lc";?>&amp;aq=&amp;sspn=0.111915,0.295601&amp;ie=UTF8&amp;hq=&amp;&amp;t=m&amp;z=12&amp;output=embed" allowfullscreen></iframe>


 
 
 
 
</div>
</div> 


<?php

 include('./Footer.php');

?>
