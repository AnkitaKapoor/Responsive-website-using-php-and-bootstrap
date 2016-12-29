<?php
class Connection
{
   function connect()
   {
      $connection_url="latcs7.cs.latrobe.edu.au";
      $username='18358877'; 
      $password='Karankita_6100'; 
      $db_name='18358877';
            mysql_connect( "$connection_url","$username","$password" ) OR
         die("Could Not Connect to Database");
          mysql_select_db( "$db_name" ) OR
         die("Failed Selecting to DB");
   }
   function close()
   {
      mysql_close();
   }
}
?>
