<?php // login.php
//require_once 'login.php';

$q = strval($_GET['q']);

$q1 = substr($q,0,3);
$q2 = substr($q,3);

include 'connectDB.php';
  // $db_hostname = 'localhost';
  // //$db_database = 'u303291028_studb';
  // //$db_username = 'u303291028_root';
  // //$db_password = 'Md1bpxLRe3';
  // $db_database = 'studentdb';
  // $db_username = 'root';
  // $db_password = '';

  // $db_server = mysql_connect($db_hostname, $db_username, $db_password);
  
  // if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  // mysql_select_db($db_database)
  // or die("Unable to select database: " . mysql_error());


if($q1=="CHK")
  $query = "SELECT * FROM student_details_table WHERE name LIKE '%$q2%'";
elseif($q1=="ALL" && $q2=="0")
  $query = "SELECT * FROM student_details_table";
elseif($q1=="ALL" && $q2!="0")
  $query = "SELECT * FROM student_details_table WHERE year='$q2'";
elseif($q1!="ALL" && $q2=="0")
  $query = "SELECT * FROM student_details_table WHERE branch='$q1'";
else
  $query = "SELECT * FROM student_details_table WHERE branch='$q1' AND year='$q2'";




$qry_result = mysql_query($query) or die(mysql_error());
$count=1;
$display_string=" ";
//echo $q;

 
while($row = mysql_fetch_array($qry_result)){
   $display_string .= "<tr>";
   $display_string .= "<td>$count</td>";
   $display_string .= "<td><img class='img_stu' src='resources/girl.jpg'></td>";
   $display_string .= "<td>$row[name]</td>";
   $display_string .= "<td>$row[branch]</td>";
   $display_string .= "<td>$row[branch_roll]</td>";
   $display_string .= "<td>$row[cgpa]</td>";
   $display_string .= "<td>$row[year]</td>";
   $display_string .= "<td>Female</td>";//add gender attribute to table
   $display_string .= "<td class='selection'>Ambrosia, Jaika, Dominos</td>";
   $display_string .= "<td><input id='textinput' name='remark' type='text' placeholder='Tell Something' class='form-control input-md'></td>";
   $display_string .= "<td><a id='addRow'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
   $display_string .= "<td><button id='removeStu' class='btn btn-default edit'  type='button'><span class='glyphicon glyphicon-remove'></span></button></td>";
   $display_string .= "<td><div class='ckbox'><input type='checkbox' id='checkbox1'></div></td>";
   $display_string .= "</tr>";
   $count=$count+1;
   
}



echo $display_string;
?>
