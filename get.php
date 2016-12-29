<?php
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$id= addslashes($_REQUEST['Id']);
$Image=mysql_query("Select * from LC_Advertisement where Id=$id");
$Image=mysql_fetch_assoc($Image);
$Image= $Image['Image'];
header("Content-type: Image/jpeg");
echo $Image;
?>
