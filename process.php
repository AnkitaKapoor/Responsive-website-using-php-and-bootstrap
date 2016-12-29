<?php
session_start();
  $u = $_SESSION['email'];

  include('./connect_to_db.php');

  //get an instance
  $db = new Connection();

	
  $db->connect();

  //insert into the database
  mysql_query( $query );
 
  //get the historical locations from the database, reusing the variable $query
  $query = "SELECT * FROM LOCATIONS";


  //query the database
  $result = mysql_query( $query );
  $num = mysql_num_rows($result); // find the numnber of records

  $output = ""; // initialize the output string
  // from the database, construct an output string that holds the list of users and their locations
  while( $row = mysql_fetch_array( $result ))
  {
    //new order id to be used
    $output = $output."User:" . $row['username'] . ";" . $row['latitude'] . ",". $row['longitude']."*". $row['Address'] ."?";
  }

  
  //close once finished to free up resources
  $db->close();

  echo $num."@".$output; // send it to the client!
  
  /* Note an example of a string output by this program is:
  3@User:tcook;12,123 User:tcook;-37.63983514006834,145.08707678188233 User:tcook;-37.63972884422956,145.0869307026139  
  */

?>