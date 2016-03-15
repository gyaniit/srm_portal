<?php
session_start();
error_reporting(0);
$username = $_SESSION['username'];
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

{
  if($_POST['reject']){
    $rejected = $_POST['reject'];
    if($rejected){
        foreach($rejected as $key){
          if($key){
              $status = substr($key,0,1);
              $len = strlen($key);
              $compid = substr($key,1,$len);

              if($status == '1') $status = "accepted";
              else $status="rejected";

              $query = "UPDATE company_details_table SET company_status = '".$status."' WHERE company_id = '".$compid."'";
              $result = mysql_query($query);
              if (!$result) die ("Database access failed: " . mysql_error());
              echo "<br>";
              print_r($result);
            }
        }
      }
    }
  if($_POST['accept']){
    $accepted = $_POST['accept'];
    if($accepted){
        foreach($accepted as $key){
          if($key){
              $status = substr($key,0,1);
              $len = strlen($key);
              $compid = substr($key,1,$len);
              echo $jobid;
              echo "<br>";
              echo $status;
              if($status == '1') $status = "accepted";
              else $status="rejected";

              $query = "UPDATE company_details_table SET company_status = '".$status."' WHERE company_id = '".$compid."'";
              $result = mysql_query($query);
              if (!$result) die ("Database access failed: " . mysql_error());
              echo "<br>";
              print_r($result);
            }
        }
      }
    }
    header("Location:admin_company_notif.php");
}


 ?>
