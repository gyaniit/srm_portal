<?php // login.php
  error_reporting(0);
  // $db_hostname = 'localhost';
  // $db_database = 'studentdb';
  // $db_username = 'root';
  // $db_password = '';
  $db_hostname = 'localhost';
  $db_database = 'u171585512_studb';
  $db_username = 'u171585512_root';
  $db_password = 'RYF5M9cGGi';

  $db_server = mysql_connect($db_hostname, $db_username, $db_password);

  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  mysql_select_db($db_database)
  or die("Unable to select database: " . mysql_error());


//echo "connected to db";

?>
