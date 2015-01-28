<?php
  session_start();
    if (!isset($_SESSION['ID_No'])) {
    header('Location:login.php');
}

$user=$_SESSION['ID_No'];



error_reporting(0);
if($_POST['resume'] == "Submit")
{
	$errorMessage = "";
	$lastName = $_POST['lastName'];
	$firstName = $_POST['firstName'];
	$middleName = $_POST['middleName'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$mobNumber = $_POST['mobNumber'];
	$telNumber =$_POST['telNumber'];
	$highSchool = $_POST['highSchool'];
	$college = $_POST['college'];
	$degree = $_POST['degree'];
	$yearGraduated = $_POST ['yearGraduated'];
	$awards = $_POST ['awards'];
	$seminarsAttendded = $_POST['seminarsAttendded'];
	$seminarsFacilitated = $_POST ['seminarsFacilitated'];
	$extraActivities = $_POST ['extraActivities'];
	$skills = $_POST ['skills'];
	$experience = $_POST ['experience'];
	
	if(empty($_POST['lastName']))
	{
		$errorMessage .= "<li>Please enter your last name</li>";
	}
	if(empty($_POST['firstName']))
	{
		$errorMessage .= "<li>Please enter your first name</li>";
	}
	if(empty($_POST['middleName']))
	{
		$errorMessage .= "<li>Please enter your middle name</li>";
	}
	if(empty($_POST['street']))
	{
		$errorMessage .= "<li>Please enter your street</li>";
	}
	if(empty($_POST['city']))
	{
		$errorMessage .= "<li>Please enter your city</li>";
	}
	if(empty($_POST['zip']))
	{
		$errorMessage .= "<li>Please enter your zip code</li>";
	}
	if(empty($_POST['email']))
	{
		$errorMessage .= "<li>Please enter your email address</li>";
	}
	if(empty($_POST['mobNumber']))
	{
		$errorMessage .= "<li>Please eneter your mobile number, if you non please write not available</li>";
	}
	if(empty($_POST['telNumber']))
	{
		$errorMessage .= "<li>Please enter your telephone number, if you have non please write not available</li>";
	}
	if(empty($_POST['highSchool']))
	{
		$errorMessage .= "<li>Please enter your school in high school</li>";
	}
	if(empty($_POST['college']))
	{
		$errorMessage .= "<li>Please enter your school in college</li>";
		
	}
	if(empty($_POST['degree']))
	{
		$errorMessage .= "<li>Please enter your college degree</li>";
	}
	if(empty($_POST['yearGraduated']))
	{
		$errorMessage .= "<li>Please enter the year you graduated</li>";
	}
	if(empty($_POST['awards']))
	{
		$errorMessage .= "<li>Please enter your awards, if you have non please write not available</li>";
	}
	
	if(empty($_POST['seminarsAttendded']))
	{
		$errorMessage .= "<li>Please enter the seminars you have attended, if you have non please write not available</li>";
	}
	if(empty($_POST['seminarsFacilitated']))
	{
		$errorMessage .= "<li>Please enter the seminars you have facilitated, if you have non please write not available</li>";
	}
	if(empty($_POST['extraActivities']))
	{
		$errorMessage .= "<li>Please enter your extra curicular activities, if you have non please write not available</li>";
	}
	if(empty($_POST['skills']))
	{
		$errorMessage .= "<li>Please write your skills</li>";
	}
	if(empty($_POST['experience']))
	{
		$errorMessage .= "<li>Please enter your experience, if you have non please write not available</li>";
	}
	if(empty($errorMessage))
	{
	echo "$lastName";
	echo "sdad";
	echo "$user";
		mysql_connect('localhost', 'root', '')
        or die(mysql_error());
		
        mysql_select_db('lbas_hr') 
        or die(mysql_error());
		
		$sql = "UPDATE person 
				SET L_Name = '".$lastName."', 
					F_Name = '".$firstName."', 
					M_Name = '".$middleName."'
				WHERE ID_No ='".$user."'";
				
		$sql2 = "UPDATE resume
				 SET Email = '".$email."',
					 M_No = '".$mobNumber."',
					 T_No = '".$telNumber."',
					 City = '".$city."',
					 Street = '".$street."',
					 Z_Code = '".$zip."',
					 H_School = '".$highSchool."',
					 College = '".$college."',
					 Course = '".$degree."',
					 Awards = '".$awards."',
					 S_Attended = '".$seminarsAttendded."',
					 S_Facilitated = '".$seminarsFacilitated."',
					 C_Activities = '".$extraActivities."'
				 WHERE ID_No='".$user."'";
		
				$updatePerson = mysql_query($sql);
				$updateResume = mysql_query($sql2);
	
		if ($updatePerson && $updateResume){
				echo 'fuck yeah';
		}
		else {
				echo 'fuck no';
				
		}
	}
	
	
}		
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>LBASS Applicant Resume</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
            rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pages/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="jquery/jquery-ui.css">
    <link href="content/shared/styles/examples-offline.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.common.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.rtl.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.default.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.dataviz.min.css" rel="stylesheet">
    <link href="dateTimePicker/styles/kendo.dataviz.default.min.css" rel="stylesheet">

    
           <!-- Placed at the end of the document so the pages load faster --> 
	<script src="js/jquery-1.7.2.min.js"></script> 
	<script src="js/excanvas.min.js"></script> 
	<script src="js/chart.min.js" type="text/javascript"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="js/base.js"></script>   

  <style type="text/css">
    .panel-heading {
    width: 20em;
    height: 2em;
    text-align: center;	
    background-color: lightgray;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    text-align: center;
    }
    .panel-body{
	border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    }
    #resume-label{
    	text-indent: .5em;
    }
    td {
    padding: 7px;
	}
  </style>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<?php
		error_reporting(0);
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<!--main navbar-->
 <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class=></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="ApplicantPage.php">LBASS Human Resource Information System </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Let Rivera (Dummy Data)<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
            <form class="navbar-search pull-right">
              <input type="text" class="search-query" placeholder="Search">
            </form>
          </div>
          <!--/.nav-collapse --> 
        </div>
        <!-- /container --> 
      </div>
      <!-- /navbar-inner --> 
    </div>
    <!-- /navbar -->
    <div class="subnavbar">
      <div class="subnavbar-inner">
        <div class="container">
          <ul class="mainnav">
            <li><a href="ApplicantPage.php"><i class="icon-home"></i><span>Home</span> </a> </li>
            <li><a href="ApplicantGuidelines.html"><i class="icon-list-alt"></i><span>Guidelines</span> </a> </li>
            <li class="active"><a href="#"><i class="icon-file"></i><span>Resume</span> </a> </li>
          </ul>
        </div>
        <!-- /container --> 
      </div>
      <!-- /subnavbar-inner --> 
    </div>
    <!-- /subnavbar -->

<div class="container">	 <!--Panel Heading only-->
 	  <div class="row">
 	  	<div class="col-lg-6">
 	  <div class="panel-heading"><h4 class="panel-title">Applicant Resume</h4></div>
	  <div class="panel-body">	   <!--/Panel Heading only-->
		<form action="resume.php" method="POST">
		  <div class="table-responsive">	<!--Resume Form into table-->
		  <table class="table"> 
			<thead>
				<tr>
					<th>Personal Information</th>
					<th></th>
					<th>Contact details</th>
				</tr>
			</thead>
				<tbody>

				<tr>
					<td id="resume-label">First Name: </td>
					<td>
						<input type="text" name="firstName" value="<?=$firstName;?>">
					</td>
					<td id="resume-label">E-mail: </td>
					<td>
						<input type="text" name="email" value="<?=$email;?>"><br>
					</td>
				</tr>	
				<tr>
					<td id="resume-label">Last Name:</td>
					<td>						
						<input type="text" name="lastName" value="<?php echo"$lastName";?>">
					</td>
					<td id="resume-label">Mobile Number: </td>
					<td>
						<input type="text" name="mobNumber" value="<?=$mobNumber;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Middle Name:</td>
					<td>
						<input type="text" name="middleName" value="<?=$middleName;?>">
					</td>
					<td id="resume-label">Telephone Number: </td>
					<td>
						<input type="text" name="telNumber" value="<?=$telNumber;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Gender:</td>
					<td>
						<input type="radio" name="sex" value="male" checked>Male
						<input type="radio" name="sex" value="female">Female <br>
					</td>
					<td id="resume-label">High School:</td>
					<td>
						<input type="text" name="highSchool" value="<?=$highSchool;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label"><br>Civil Status:</td>
					<td>
						<input type="radio" name="sex" value="single" checked>Single
						<input type="radio" name="sex" value="married">Married
						<input type="radio" name="sex" value="Divorced">Divorced
						<input type="radio" name="sex" value="Divorced">Widowed
					</td>
					<td id="resume-label">Degree:</td>
					<td>
						<input type="text" name="degree" value="<?=$degree;?>"><br>
					</td>
				</tr>
				<tr></tr>
				<tr>
					<td id="resume-label"><br><b>Address</b></td>
					<td id="resume-label"></td>
					<td id="resume-label"><br><b>Education</b></td>
				</tr>
				<tr>
					<td id="resume-label">Street:</td>
					<td>
						<input type="text" name="street" value="<?=$street;?>"> <br>
					</td>
					<td id="resume-label">College/University:</td>
					<td>
						<input type="text" name="college" value="<?=$college;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">City/Province:</td>
					<td>	
						<input type="select" name="city" value="<?=$city;?>"> <br>
					</td>
					<td id="resume-label">Year Graduated:</td>
					<td>
						<input type="text" name="yearGraduated" value="<?=$yearGraduated;?>"> <br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Zip Code:</td>
					<td>
						<input type="text" name="zip" value="<?=$zip;?>"><br>
					</td>
					<td id="resume-label">Awards:</td>
					<td>
						<input type="text" name="awards" value="<?=$awards;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label"><br><b>Experience</b></td>
					<td></td>
					<td id="resume-label"><br><b>Skill</b></td>
				</tr>
				<tr>
					<td id="resume-label">Previous Experience (Position, Company):</td>
					<td>						
						<input type="text" name="experience" value="<?=$experience;?>"><br>
						
					</td>
					<td id="resume-label">Extra Curricular Actvities</td> <br>
					<td>
						<input type="text" name="extraActivities" value="<?=$extraActivities;?>"><br>
					</td>
				</tr>
				<tr>
					<td id="resume-label">Seminars Attended(Year, Title):</td>
					<td>
						<input type="text" name="seminarsAttendded" value="<?=$seminarsAttendded;?>"><br>
					</td>
					<td id="resume-label">Specialties and Technical Skills <br> &nbsp (Year, Title):</td>
					<td>
						<input type="text" name="skills" value="<?=$skills;?>"><br>
					</td>
					
				</tr>
				<tr>
					<td id="resume-label">Seminars Facilitated(Year, Title)</td>
					<td>
						<input type="text" name="seminarsFacilitated" value="<?=$seminarsFacilitated;?>"><br>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td><input type="submit" name="resume" value="Submit" /></td>
				</tr>	
											
			
			</tbody>
			</table>
			</form>
	  </div>
	</div>
</div>
</div>
</div>
</body>
</html>