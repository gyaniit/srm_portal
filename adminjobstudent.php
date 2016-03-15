<?php
  session_start();
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
  if($_POST['stu_uname']&&
    $_POST['stu_name']&&
    $_POST['stu_branch']&&
    $_POST['stu_year']&&
    $_POST['stu_date']&&
    $_POST['stu_comp']&&
    $_POST['stu_desig']&&
    $_POST['stu_jobdes']){
      $stuname = $_POST['stu_uname'];
      $stname  =  $_POST['stu_name'];
      $stbranch =  $_POST['stu_branch'];
      $styear =  $_POST['stu_year'];
      $stdate =  $_POST['stu_date'];
      $stcomp =  $_POST['stu_comp'];
      $stdesig =  $_POST['stu_desig'];
      $stjobdes =  $_POST['stu_jobdes'];

      $stdesig .=$stjobdes;
      $rd = rand(1,1000);
      $compId = substr($stcomp,0,3);
      $compId.=$rd;

      $query = "INSERT INTO `student_job_table`(`job_id`, `job_assigned`, `job_description`, `job_date`, `job_status`, `cand_username`,
         `cand_name`, `cand_branch`, `cand_year`) VALUES ('".$compId."','".$stcomp."','".$stdesig."',
           '".$stdate."','','".$stuname."','".$stname."','".$stbranch."','".$styear."')";
      $result = mysql_query($query);
      if (!$result) die ("Database access failed: Please try again" . mysql_error());
      if($result) header("Location:admin_job_assign.html");



    }
    ?>
