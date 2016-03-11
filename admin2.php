<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>student dashboard</title>

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
        .edit{
            background: #fff;
            border-color: #fff !important;
            color: red;
            padding:0px;

        }
        .edit:hover,.edit:active,.edit:focus{
            background: #fff;
            border-color: #fff !important;
            padding:0px;
        }
        
        .img_stu{
            height:100px;
        }
        .selection{
            width:200px;
        }
        
	</style>
    <script language="JavaScript" type="text/javascript" src="js/jquery-1.11.1.min.js"></script>

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
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Students</a>
                    </li>
                    <li>
                        <a href="#">Recruiters</a>
                    </li>
                    <li>
                        <a href="#">Assign Jobs</a>
                    </li>
                    <li>
                        <a href="#">Company Notification</a>
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
    <!-- START: Code for Adding rows to table -->
    <script>
    // test below

        function showStudents(str,str2) {
          var xhttp;  
            if(str==" ")
                str="ALL";
            if(str2==" ")
                str2="0";

          
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
              document.getElementById("rowStu").innerHTML = xhttp.responseText;
            }
          };
          xhttp.open("GET", "getstudent.php?q="+str+str2, true);
          xhttp.send();
        }


    
    </script>
    <!-- END: Code for Adding rows to table -->

			<!--bullshit below-->
            

            <div class="col-md-12" style=" margin-top:10px; margin-bottom:20px;">
                <form action="#" method="get" style="margin-bottom:20px;">
                    <div class="row">
                        <div class="form-group" >
                            <!-- <label class="col-md-2 control-label" for="selectbasic">Branch</label> -->
                              <div class="col-md-3"></div>
                              <div class="col-md-2">
                              <div class="input-group-btn">
                                <select id="branch" name="branch"  class="form-control" onchange="showStudents(this.value,year.value)">
                                 
                                  <option value=" " disabled="disabled" selected>Select branches</option>
                                  <option value="ALL">All Students</option>
                                  <option value="CSE">CSE</option>
                                  <option value="EEE">EEE</option>
                                  <option value="ECE">ECE</option>
                                  <option value="MIN">MIN</option>
                                  <option value="MNC">MNC</option>
                                  <option value="CER">CER</option>
                                  <option value="CIV">CIV</option>
                                  <option value="MET">MET</option>
                                  <option value="MEC">MEC</option>
                                  <option value="IT">IT</option>
                                  
                                </select>

                            </div>

                                
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                              <!-- <label class="col-md-2 control-label" for="selectbasic">Year</label> -->
                              <div class="col-md-2">
                              <div class="input-group-btn">
                                <select id="year" name="year" class="form-control" onchange="showStudents(branch.value,this.value)">
                                  <option value=" " disabled="disabled" selected>Select Year</option>
                                  <option value="0">ALL</option>
                                  <option value="1">I</option>
                                  <option value="2">II</option>
                                  <option value="3">III</option>
                                  <option value="4">IV</option>
                                  
                                </select>
                                
                            </div>
                                
                            </div>
                        
                        <div class="col-md-2">
                            <div class="input-group">
                                <input id="stu_name" name="st_name"type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" style="background:#efefef;" type="button" onclick="showStudents('CHK',stu_name.value)"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </form>
            </div>
            <br>
            <hr>

            <div class="col-md-12">
                <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>Sl. No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Roll</th>
                            <th>CGPA</th>
                            <th>Year</th>
                            <th>Gender</th>
                            <th>Selections</th>
                            <th>Remarks</th>
                            <th>Edit</th>
                            <th>Remove</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody id="rowStu">
                        <tr>
                            <th>1</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>2</td>
                            <td>Male</td>
                            <td class="selection">Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a id="addRow"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button id="removeStu" class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>
                     
                    </tbody>
                </table>   
            </div>


			<!--bullshit above-->

    <footer>

        <div class="small-print">
        	<div class="container">
            <hr style="color:#444; margin-top: 20px;">
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
