<?php // login.php
//require_once 'login.php';
$db_hostname = 'localhost';
$db_database = 'newdb';
$db_username = 'adrs';
$db_password = 'qwerty';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if($db_server) echo "done connection";
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database)
or die("Unable to select database: " . mysql_error());
$query = "SELECT * FROM db1";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);
echo mysql_result($result,$row,'Name');
?>
