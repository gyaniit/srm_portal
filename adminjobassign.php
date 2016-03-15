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
  //print_r($_POST['brnc']);
  if($_POST['brnc']&&
     $_POST['company_name']&&
     $_POST['company_desig']&&
     $_POST['company_job_description']&&
     $_POST['year']&&
     $_POST['date']){

       $branchs = $_POST['brnc'];
       $compname = $_POST['company_name'];
       $compdesg = $_POST['company_desig'];
       $compjobdes = $_POST['company_job_description'];
       $years = $_POST['year'];
       $date = $_POST['date'];
       foreach ($branchs as $branch) {
         # code...
         $query = "SELECT * FROM student_details_table WHERE branch = '".$branch."' AND year = '".$years."'";
         $result = mysql_query($query);
         if (!$result) die ("Database access failed: " . mysql_error());
         $row = mysql_num_rows($result);

         if($row == 0){

         }
         else{
             while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
               $uname = $row['username'];
               $brch = $row['branch'];
               $names = $row['name'];
               $yrs = $row['year'];
               $rd = rand(1,1000);
               $compId = substr($compname,0,3);
               $compId.=$rd;
               $jobDescrip = $compdesg.','.$compjobdes;
               $query = "INSERT INTO `student_job_table`(`job_id`, `job_assigned`, `job_description`, `job_date`, `job_status`, `cand_username`,
                  `cand_name`, `cand_branch`, `cand_year`) VALUES ('".$compId."','".$compname."','".$jobDescrip."',
                    '".$date."','','".$uname."','".$names."','".$brch."','".$yrs."')";
               $result = mysql_query($query);
               if (!$result) die ("Database access failed: Please try again" . mysql_error());
               header("Location:admin_job_assign.html");
               echo $result;
             }
         }
       }
     }

?>
