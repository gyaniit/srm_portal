<?php
    session_start();// login.php
    error_reporting(0);
//require_once 'login.php';
//include 'globalvar.php';
$_SESSION['loggedIn']=true;
$name = $father_name =$mother_name = $dob = $email = $roll = $branch = $year = $cgpa = $UID = $PWD = "";
$row = 0;

    // $db_hostname = 'localhost';
    // //$db_database = 'u303291028_studb';
    // //$db_username = 'u303291028_root';
    // //$db_password = 'Md1bpxLRe3';
    //
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

    if($_SESSION['username'] && ($_SESSION['isSignedUp'] || $_SESSION['loggedIn'])){
      $UID = $_SESSION['username'];

      $query = "SELECT * FROM student_details_table WHERE username = '".$UID."'";
      $result = mysql_query($query);
      if (!$result) die ("Database access failed: " . mysql_error());

      $row = mysql_num_rows($result);


      if($row == 0){
          header("Location: index.html");
      }
      else {

         while($row = mysql_fetch_array($result, MYSQL_ASSOC))
         {
             $name = $row['name'];
             $father_name = $row['father_name'];
             $mother_name = $row['mother_name'];
             $dob = $row['dob'];
             $email = $row['email'];
             $roll = $row['branch_roll'];
             $gender = $row['gender'];
             $branch = $row['branch'];
             $year = $row['year'];
             $cgpa = $row['cgpa'];
             $imageuri ="uploads/".$branch.$roll.'.jpeg';
             if (getimagesize($imageuri) == false){
                 $imageuri = "uploads/girl.jpg";
              }
         }
       }
    }

    else if($_POST["uid"] && $_POST["pwd"]){
      //echo $_POST['userType'];
        if($_POST['userType'] == '2'){
          if($_POST['uid'] == 'grid' && $_POST['pwd'] == 'coding')
          {
            $_SESSION['admin'] = 'grid';
            header("Location:admin2.php");
          }
        }
        else{

         $UID=$_POST["uid"];
         $PWD = $_POST["pwd"];
         $_SESSION['username'] = $UID;
         //echo $UID;

         $query = "SELECT * FROM student_details_table WHERE username = '".$UID."' AND password = '".$PWD."'";
         $result = mysql_query($query);
         if (!$result) die ("Database access failed: " . mysql_error());

         $row = mysql_num_rows($result);
                  //echo $row;

         if($row == 0){
             header("Location: index.html");
         }
         else {
            # code...
            $_SESSION['uid'] = $_POST["uid"];
            $_SESSION['is_loggedin']=true;
            while($row = mysql_fetch_array($result, MYSQL_ASSOC))
            {
                $name = $row['name'];
                $father_name = $row['father_name'];
                $mother_name = $row['mother_name'];
                $dob = $row['dob'];
                $email = $row['email'];
                $roll = $row['branch_roll'];
                $gender = $row['gender'];
                $branch = $row['branch'];
                $year = $row['year'];
                $cgpa = $row['cgpa'];
                $imageuri ="uploads/".$branch.$roll.'.jpeg';
                if (getimagesize($imageuri) == false){
                    $imageuri = "uploads/girl.jpg";
                 }
            }
          }
       }
     }
    else {
       # code...
      header("Location: index.html");
     }
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <link rel="shortcut icon" href="resources/srm-logo1.jpg" />
    <title>TPO-SRMU</title>


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
    /*Include this section for the Navigation Section*/

		.navbar-brand{
			padding:0px;
		}

		.logo{
			padding-left:10px;
			padding-right:10px;
			margin-left: 0px;
		}
	/*Navigation section ends*/

        .student_pic{
            margin-top: 62px;
            height: 200px;
            padding: 8px;
            border: solid 1px #ccc;
        }
        .edit_btn{
            margin-top: 20px;
            background: #337ab7;

        }
	</style>

</head>

<body>

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
                <a class="navbar-brand" href="#"><img class="logo img-responsive" alt="SRM University" src="resources/srm-logo2.jpg"></a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <a >Profile</a>
                    </li>
                    <li>
                        <a href="studentjobs.php">Job & Companies</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php">Sign out</a>
                    </li>
                </ul>


				<!-- Search -->
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
			</div>
            </div>
            <!-- /.navbar-collapse -->
			<div class="container">
			<div class="row">
					<form>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 "><img class="student_pic" src=<?php echo $imageuri; ?>></div>
					<div class='col-md-6'>
                    <div class="row">
                        <div class="col-md-10"><h2>Profile info</h2></div>
                        <div class="col-md-2"><a href="editstudentprofile.html"><input class="btn btn-info edit_btn" type="button" value="Edit"></a></div>

                    </div>
					 	<table class="table table-striped">


							 <thead style="padding-bottom:20px;font-size:30px;"></thead>
							 <tbody>
							 	<tr>
								 <td class="text-info">Name:</td>
								 <td><?php echo $name; ?></td>
							 </tr>
							 <tr>
								 <td class="text-info">Father's Name:</td>
								 <td><?php echo $father_name ?> </td>
							 </tr>
							<tr>
								 <td class="text-info">Mother's Name:</td>
								 <td><?php echo $mother_name ?></td>
							 </tr>
							 <tr>
								 <td class="text-info">Date of Birth:</td>
								 <td><?php echo $dob ?></td>
							 </tr>
                                                        <tr>
								 <td class="text-info">Gender:</td>
								 <td><?php echo $gender ?></td>
							 </tr>
							<tr>
								 <td class="text-info">Email:</td>
								 <td><?php echo $email ?></td>
							 </tr>
							<tr>
								 <td class="text-info">Roll No.:</td>
								 <td><?php echo $roll ?></td>
							 </tr>
							<tr>
								 <td class="text-info">Branch:</td>
								 <td><?php echo $branch ?></td>
							 </tr>
							<tr>
								 <td class="text-info">Year:</td>
								 <td><?php echo $year ?></td>
							 </tr>
							<tr>
								 <td class="text-info">Current cgpa:</td>
								 <td><?php echo $cgpa ?></td>
							 </tr>
               <tr>
                  <td class="text-info">Username:</td>
                  <td><?php echo $UID ?></td>
                </tr>

							 </tbody>
						 </table>
					</div>
                    <div class="col-md-2"></div>
			</div>
        </div>
        <!-- /.container -->
    </nav>

<footer>

        <div class="small-print">
        	<div class="container">
            <hr style="color:#ccc;">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; Example.com 2015 </p>
        	</div>
        </div>
	</footer>


    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>


</body>

</html>
