<?php

header("Content-type: text/css");
include('./connect_to_db.php');

 $db = new Connection();
 $db->connect();
 $query = "select *
 FROM LC_Website";
 $result = mysql_query( $query );

 while($row = mysql_fetch_array( $result ))
 {
 session_start();
		 $colr = $row['tColor'];
		 $nb = $row['Navbar'];
?>

.panel-info{
	border-color:<?php echo $colr;?>;
	}
.panel-info>.panel-heading
{
	color:black;
	background-color:<?php echo $colr;?>;
	border-color:<?php echo $colr;?>;
}


.navbar-inverse
{
	background-color:<?php echo $nb;?>;
	border-color:#080808
}

  
<?php
 }
 ?>