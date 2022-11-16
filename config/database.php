<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db_name = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass, $db_name);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
?>