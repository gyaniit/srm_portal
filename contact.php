<?php // login.php
//require_once 'login.php';

  $db_hostname = 'localhost';
  $db_database = 'u303291028_studb';
  $db_username = 'u303291028_root';
  $db_password = 'Md1bpxLRe3';
  $db_server = mysql_connect($db_hostname, $db_username, $db_password);
  if($db_server) echo "done connection";
  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  mysql_select_db($db_database)
  or die("Unable to select database: " . mysql_error());



  if($_POST["name"] &&
     $_POST['father_name']&&
     $_POST['mother_name']&&
     $_POST['dob']&&
     $_POST['email']&&
     $_POST['roll']&&
     $_POST['branch']&&
     $_POST['year']&&
     $_POST['cgpa']&&
     $_POST['username']&&
     $_POST['password']&&
     $_POST['conf_password'])
    {
              $name = $_POST['name'];
              $father_name = $_POST['father_name'];
              $mother_name = $_POST['mother_name'];
              $dob = $_POST['dob'];
              $email = $_POST['email'];
              $roll = $_POST['roll'];
              $branch = $_POST['branch'];
              $year = $_POST['year'];
              $cgpa = $_POST['cgpa'];
              $username = $_POST['username'];
              $password = $_POST['password'];
              $conf_password = $_POST['conf_password'];

              if($password == $conf_password){
                $branchid = 0;
                $jobs = "not yet";
                $company = "no";
                $query = "INSERT INTO student_details_table (branch_id, branch_roll, name, username, password,
                         father_name, mother_name, dob, email, branch, year, cgpa, job, company_applied)
                         VALUES ('".$branchid."','".$roll."','".$name."','".$username."','".$password."','".$father_name."','".$mother_name."','".$dob."','".$email."','".$branch."','".$year."','".$cgpa."','".$jobs."','".$company."')";
                if (!mysql_query($query, $db_server))
                echo "INSERT failed: $query<br>" . mysql_error() . "<br><br>";
              }

            }


?>
