<?php
    session_start();// login.php
//require_once 'login.php';
    $db_hostname = 'localhost';

    //$db_database = 'u303291028_studb';
    //$db_username = 'u303291028_root';
    //$db_password = 'Md1bpxLRe3';

    $db_database = 'studentdb';
    $db_username = 'root';
    $db_password = '';

    $db_server = mysql_connect($db_hostname, $db_username, $db_password);
    if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
    mysql_select_db($db_database)
    or die("Unable to select database: " . mysql_error());
    if($_POST["uid"] && $_POST["pwd"]){

         $UID=$_POST["uid"];
         $PWD = $_POST["pwd"];

         $query = "SELECT * FROM `student_details_table` WHERE username = '".$UID."' AND password = '".$PWD."'";
         $result = mysql_query($query);
         if (!$result) die ("Database access failed: " . mysql_error());

         $rows = mysql_num_rows($result);
         $_SESSION['uid'] = $_POST["uid"];
         $_SESSION['is_loggedin']=true;

         echo $_SESSION["uid"];
         //header("Location: https://google.com");
       }
?>
