<?php // login.php
//require_once 'login.php';

  $db_hostname = 'localhost';
  //$db_database = 'u303291028_studb';
  //$db_username = 'u303291028_root';
  //$db_password = 'Md1bpxLRe3';
  $db_database = 'studentdb';
  $db_username = 'root';
  $db_password = '';

  $db_server = mysql_connect($db_hostname, $db_username, $db_password);
  if($db_server) echo "done connection";
  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  mysql_select_db($db_database)
  or die("Unable to select database: " . mysql_error());

  //print_r($_POST);
  //print_r($_FILES);




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

            $target_dir = "uploads/";
            $target_file = $target_dir . basename($branch.$roll.'.jpeg');
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if($_FILES["fileToUpload"]) {
              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              if($check !== false) {
                  //echo "File is an image - " . $check["mime"] . ".";
                  $uploadOk = 1;
                  $_SESSION['is_uploaded'] = $uploadOk;
                  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
              } else {
                  //echo "File is not an image.";
                  $uploadOk = 0;
                  $_SESSION['is_uploaded'] = $uploadOk;
              }
            }


?>
