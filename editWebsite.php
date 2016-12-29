<?php
	include('./connect_to_db.php');
$db = new Connection();
session_start();
$db->connect();
$tablecolor = $_POST['rating'];
$menubar = $_POST['mb'];
 $query = "Delete from LC_Website";  
$result = mysql_query( $query );
   $query1 = "Insert into LC_Website values( '','$menubar','$tablecolor')";  
$result1 = mysql_query( $query1 );
    echo 'Data Updated';  
    header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/ManageWebsite.php",true);
$db->close();
?>

