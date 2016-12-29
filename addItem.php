<?php
session_start();
$image_name =  $_POST["image"];
$uploadDir = 'images/items/';
$filePath = $uploadDir . $image_name;
$Category =  $_POST["Category"];
$Subcategory =  $_POST['SubCategory'];
$Description =  $_POST['Description'];
$Title =  $_POST['Title'];
$Price =  $_POST['Price'];
$email= $_SESSION['email'];
$query = "INSERT INTO LC_Item VALUES ('','$Category','$Subcategory','$Description ','$Price','$Title','$email', NOW(),'0','A','$filePath');";
include('./connect_to_db.php');
$db = new Connection();
$db->connect();
$result = mysql_query( $query );
$db->close();
header("Location: http://homepage.cs.latrobe.edu.au/16ice34/LetsConnect-Mobile/PostItem.php",true);
exit();
?>
