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

  if($username){
    $query = "SELECT * FROM student_job_table WHERE cand_username = '".$username."'";
    $result = mysql_query($query);
    if (!$result) die ("Database access failed: " . mysql_error());
    $result2 = $result;

    $row = mysql_num_rows($result);


    if($row == 0){
        header("Location: studentDashboard.php");
    }
    else{

    }
  }
 ?>

 <!DOCTYPE html>

 <html>
 <head>
 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <title>Job assigned</title>

     <!-- Bootstrap Core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
     <link href="css/custom.css" rel="stylesheet">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

     <style>
      +    /*Include this section for the Navigation Section*/

     		.navbar-brand{
     			padding:0px;
     		}

     		.logo{
     			padding-left:10px;
     			padding-right:10px;
     			margin-left: 0px;
     		}
     	/*Navigation section ends*/

     		.form-control{
     			width:100% !important;
     		}
      +	</style>
     </head>
     <body>

     <!-- Navigation Section starts-->
         <!-- Navigation Section starts-->
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
             <div class="container-fluid">
                 <!-- Logo and responsive toggle -->
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" style="padding:0px;" href="#"><img class="logo img-responsive" alt="SRM University" src="resources/srm-logo2.jpg"></a>
                 </div>
                 <!-- Navbar links -->
                 <div class="collapse navbar-collapse" id="navbar">
                     <ul class="nav navbar-nav">
                         <li class="active">
                             <a href="index.html">Home</a>
                         </li>
                         <li>
                             <a href="#login_form">Students</a>
                         </li>
                         <li>
                             <a href="company2.html">Recruiters</a>
                         </li>
     					<!--<li class="dropdown">
     						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
     						<ul class="dropdown-menu" aria-labelledby="about-us">
     							<li><a href="#">Engage</a></li>
     							<li><a href="#">Pontificate</a></li>
     							<li><a href="#">Synergize</a></li>
     						</ul>
     					</li>
     						-->
                     </ul>
                     <form class="navbar-form navbar-right" role="search">
     		            <div class="input-group">
     						<input type="text" class="form-control" placeholder="Search for...">
     						<span class="input-group-btn">
     					    	<button class="btn btn-default" style="background:#efefef;" type="button"><span class="glyphicon glyphicon-search"></span></button>
     				    	</span>
     					</div>
     			    </form>

                 </div>
                 <!-- /.navbar-collapse -->
             </div>
             <!-- /.container -->
         </nav>
         <!-- NAvigation section ends -->
 				<!-- Search -->

             <!-- /.navbar-collapse -->


 		<div class="container" style="margin-top: 0px;">
 			<div class="jumbotron">
 				<legend style="font-size: 30px">Job List</legend>
        <form method="post" action="acceptjob.php" enctype="multipart/form-data">
 				<table class="table" >
 						<thead>
 						  <tr style="font-size: 18px">
 							<th width="150" style="text-align: center">Job assigned</th>
 							<th width="450" style="text-align: center">Job Description</th>
 							<th width="80" style="text-align: center">Date</th>
 							<th width="120" style="text-align: center">Accept</th>
 							<th width="120" style="text-align: center">Reject</th>
              <th width="100" style="text-align: center">Status</th>
 						  </tr>
 						</thead>
 						<tbody>
              <?php
              while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                $jbid = $row['job_id'];
                if($row['job_status'] == ''){

              ?>
              <tr class="success">
							<td height="60" style="text-align: center"><?php echo $row['job_assigned']?></td>
							<td height="60" style="text-align: center"><?php echo $row['job_description']?></td>
							<td height="60" style="text-align: center"><?php echo $row['job_date']?></td>

              <div class="form-group">
						    <td height="60" style="text-align: center">
                  <div class="checkbox">
                    <label for="checkboxes-0">
                      <input type="checkbox" name="accept[]" id="checkboxes-0" value="1<?php echo $jbid; ?>">
                      Accept
                    </label>
                	</div>
                </td>
                <td height="60" style="text-align: center">
                  <div class="checkbox">
                    <label for="checkboxes-0">
                      <input type="checkbox" name="reject[]" id="checkboxes-0" value="0<?php echo $jbid; ?>">
                      Reject
                    </label>
                	</div>
                </td>
              </div>
              <td style="text-align: center">
              <?php
                echo $row['job_status'];
                }
              ?>
              </td>
            </tr>
            <?php }
            $query = "SELECT * FROM student_job_table WHERE cand_username = '".$username."'";
            $result = mysql_query($query);
            if (!$result) die ("Database access failed: " . mysql_error());
            while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
              $jbid = $row['job_id'];
              if($row['job_status'] != ''){

            ?>
            <tr class="success">
            <td height="60" style="text-align: center"><?php echo $row['job_assigned']?></td>
            <td height="60" style="text-align: center"><?php echo $row['job_description']?></td>
            <td height="60" style="text-align: center"><?php echo $row['job_date']?></td>

            <div class="form-group">
              <td>
              </td>
              <td>
              </td>
            </div>
            <td style="text-align: center">
            <?php
              echo $row['job_status'];
              }
            ?>
            </td>
          </tr>
          <?php } ?>
        		</tbody>
        </table>
        <input type="submit" name='apply' class='btn btn-info' value="submit">
      </form>


      </nav>

     </div>
    </div>
    <script>
    function doConcart(str1,str2){
      var res = str1.concat(str2,str3);
      return res;
    }
    </script>

  </body>

  </html>