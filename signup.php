<?php // login.php
  //include 'globalvar.php';
 session_start();
 error_reporting(0);
  // $db_hostname = 'localhost';
  // //$db_database = 'u303291028_studb';
  // //$db_username = 'u303291028_root';
  // //$db_password = 'Md1bpxLRe3';
  // $db_database = 'studentdb';
  // $db_username = 'root';
  // $db_password = '';
  $db_hostname = 'localhost';
  $db_database = 'u171585512_studb';
  $db_username = 'u171585512_root';
  $db_password = 'RYF5M9cGGi';

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
              $username = $_POST['branch'].$_POST['year'].$_POST['roll'];
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

            $valid_exts = array('jpeg', 'jpg', 'png', 'gif');
            $max_file_size = 200 * 1024; #200kb
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($branch.$roll.'.jpeg');
            $uploadOk = 1;

            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            $ext = strtolower($imageFileType);
            if (in_array($ext, $valid_exts)) {
              if($_FILES["fileToUpload"]) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false || $check< $max_file_size) {
                  //echo "File is an image - " . $check["mime"] . ".";
                  $uploadOk = 1;
                    $_SESSION['is_uploaded'] = $uploadOk;
              //added BELOW for image resize
                    $nw = 200;
                    $nh = 237;
                    $size = $check;
                    # read image binary data
                    $data = file_get_contents($_FILES['fileToUpload']['tmp_name']);
                    # create v image form binary data
                    $vImg = imagecreatefromstring($data);
                    $x=0;
                    $y=0;
                    $w = imagesx($vImg);
                    $h = imagesy($vImg);
                    $dstImg = imagecreatetruecolor($nw, $nh);
                    # copy image
                    imagecopyresampled($dstImg, $vImg, 0, 0, $x, $y, $nw, $nh, $w, $h);
                    # save image
                    imagejpeg($dstImg, $target_file);
                    # clean memory
                    imagedestroy($dstImg);
             //added ABOVE for image resize
                  
                  
                }

               else {
                  //echo "File is not an image.";
                  $uploadOk = 0;
                  $_SESSION['is_uploaded'] = $uploadOk;
              }

            }
            }
            $_SESSION['username'] = $username;
            $_SESSION['isSignedUp'] = true;
            header("Location:studentDashboard.php");


?>
	