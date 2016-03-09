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

  if($_POST["company_name"] &&
     $_POST['pos_for_recruit']&&
     $_POST['numberOfcand']&&
     $_POST['jobDes']&&
     $_POST['package']&&
     $_POST['email']&&
     $_POST['date']&&
     $_POST['branch']&&
     $_POST['cgpa'])
    {
              $company_name = $_POST['company_name'];
              $pos_for_recruit = $_POST['pos_for_recruit'];
              $numberOfcand = $_POST['numberOfcand'];
              $jobDes = $_POST['jobDes'];
              $package = $_POST['package'];
              $email = $_POST['email'];
              $date = $_POST['date'];
              $branch = $_POST['branch'];
              $cgpa = $_POST['cgpa'];
              $xcutoff = $_POST['xcutoff'];
              $xiicutoff = $_POST['xiicutoff'];
              $comments = $_POST['comments'];


              $query = "INSERT INTO company_details_table(`companyname`, `designation`, `numberofcand`,
                 `jobdescription`, `package`, `email`, `dateofvisit`, `branch`, `cgpa`, `xcutoffcent`,
                 `xiicutoffcent`, `commentsifany`) VALUES  ('".$company_name."','".$pos_for_recruit."','".$numberOfcand."','".$jobDes."',
                 '".$package."','".$email."','".$date."','".$branch."','".$cgpa."','".$xcutoff."','".$xiicutoff."','".$comments."')";
                if (!mysql_query($query, $db_server))
                echo "INSERT failed: $query<br>" . mysql_error() . "<br><br>";


            }



?>
