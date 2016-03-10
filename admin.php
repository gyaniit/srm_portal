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

        }
        .edit:hover{
            background: #fff;
            border-color: #fff !important;
        }
        .edit:active{
            background: #fff !important;
            border-color: #fff !important;
        }
        .img_stu{
            height:100px;
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
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Students</a>
                    </li>
                    <li>
                        <a href="#">Recruiters</a>
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

			<!--bullshit below-->
            <script>
                $(document).ready(function() {
                    var activeSystemClass = $('.list-group-item.active');

                    //something is entered in search form
                    $('#system-search').keyup( function() {
                       var that = this;
                        // affect all table rows on in systems table
                        var tableBody = $('.table-list-search tbody');
                        var tableRowsClass = $('.table-list-search tbody tr');
                        $('.search-sf').remove();
                        tableRowsClass.each( function(i, val) {
                        
                            //Lower text for case insensitive
                            var rowText = $(val).text().toLowerCase();
                            var inputText = $(that).val().toLowerCase();
                            if(inputText != '')
                            {
                                $('.search-query-sf').remove();
                                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                                    + $(that).val()
                                    + '"</strong></td></tr>');
                            }
                            else
                            {
                                $('.search-query-sf').remove();
                            }

                            if( rowText.indexOf( inputText ) == -1 )
                            {
                                //hide rows
                                tableRowsClass.eq(i).hide();
                                
                            }
                            else
                            {
                                $('.search-sf').remove();
                                tableRowsClass.eq(i).show();
                            }
                        });
                        //all tr elements are hidden
                        if(tableRowsClass.children(':visible').length == 0)
                        {
                            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
                        }
                    });
                });
            </script>

            <div class="col-md-12" style=" margin-top:10px; margin-bottom:20px;">
                <form action="#" method="get" style="margin-bottom:20px;">
                    <div class="row">
                        <div class="form-group" >
                            <!-- <label class="col-md-2 control-label" for="selectbasic">Branch</label> -->
                              <div class="col-md-3"></div>
                              <div class="col-md-2">
                              <div class="input-group">
                                <select id="selectbasic" name="branch"  class="form-control">
                                  <option value="0" disabled="disabled" selected>Select Branch</option>    
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

                                <span class="input-group-btn">
                                    <button class="btn btn-default" style="background:#efefef;" type="button"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                </span>
                            </div>

                                <!-- <select id="selectbasic" name="branch"  class="form-control" required autofocus>
                                  <option value="0" disabled="disabled" selected>Select your branch</option>    
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
                              </div> -->
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                              <!-- <label class="col-md-2 control-label" for="selectbasic">Year</label> -->
                              <div class="col-md-2">
                              <div class="input-group">
                                <select id="selectbasic" name="year" class="form-control">
                                  <option value="0" disabled="disabled" selected>Select Year</option>
                                  <option value="1">I</option>
                                  <option value="2">II</option>
                                  <option value="3">III</option>
                                  <option value="4">IV</option>
                                  
                                </select>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" style="background:#efefef;" type="button"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                </span>
                            </div>
                                <!-- <select id="selectbasic" name="year" class="form-control" required autofocus>
                                  <option value="0" disabled="disabled" selected>Select your year</option>
                                  <option value="1">I</option>
                                  <option value="2">II</option>
                                  <option value="3">III</option>
                                  <option value="4">IV</option>
                                  
                                </select> 
                              </div>-->
                            </div>
                        
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" style="background:#efefef;" type="button"><span class="glyphicon glyphicon-search"></span></button>
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
                            <th>Gender</th>
                            <th>Selections</th>
                            <th>Remarks</th>
                            <th>Edit</th>
                            <th>Remove</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Female</td>
                            <td>Ambrosia, Jaika, Dominos, Foodmonk</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Female</td>
                            <td>Ambrosia, Jaika, Dominos, Foodmonk, macdee</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>5</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>6</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>7</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>8</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
                            <td>
                                <div class="ckbox">
                                    <input type="checkbox" id="checkbox1">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th>9</th>
                            <th><img class="img_stu" src="resources/girl.jpg"></th>
                            <td>XYZ</td>
                            <td>CSE</td>
                            <td>1234</td>
                            <td>8.5</td>
                            <td>Male</td>
                            <td>Ambrosia, Jaika, Dominos</td>
                            <td><input id="textinput" name="remark" type="text" placeholder="Tell Something" class="form-control input-md"></td>
                            <td><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                            <td><button class="btn btn-default edit"  type="button"><span class="glyphicon glyphicon-remove"></span></button></td>
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
