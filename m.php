<script src="bootstrap/css/a.css"></script>
<?php
  include('./connect_to_db.php');
  $db = new Connection();
  $db->connect();
 $query = "SELECT * FROM LC_Advertisement ORDER BY Id DESC";  
 $result = mysql_query( $query );
 $marquee_string = ""; 
WHILE( $line = mysql_fetch_assoc($result) )
{
	$lastId=$line["Id"];
	$mes=$line["Text"];
	 	    $marquee_string .= "<img  class=img-responsive src=get.php?Id=$lastId ></img>"; 
}
?> 
<marquee behavior="scroll" direction="left" onmouseover="javascript:this.stop()" onmouseout="javascript:this.start()"  scrollamount="20"> 
<?php 
echo $marquee_string;
?> 
</marquee> 


