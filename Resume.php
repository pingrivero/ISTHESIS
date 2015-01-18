<?php
error_reporting(0);
if($_POST['resume'] == "Submit")
{
	$errorMessage = "";
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
		mysql_connect('localhost', 'root', '')
        or die(mysql_error());

        mysql_select_db('lbas_hr') 
        or die(mysql_error());
		
	}
	
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
	
}


?>

<!DOCTYPE html>
<html>
<body>
	<?php
		error_reporting(0);
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<form action="resume.php" method="POST">
	Last name:
	<input type="text" name="lastName" value="<?php echo"$lastName";?>"><br>
	First name:
	<input type="text" name="firstName" value="<?=$firstName;?>"><br>
	Middle name: 
	<input type="text" name="middleName" value="<?=$middleName;?>"><br>

	Gender: <br>
	<input type="radio" name="sex" value="male" checked>Male<br>
	<input type="radio" name="sex" value="female">Female<br>

	Civil Status:<br>
	<input type="radio" name="sex" value="single" checked>Single<br>
	<input type="radio" name="sex" value="married">Married<br>
	<input type="radio" name="sex" value="Divorced">Divorced<br>
	<input type="radio" name="sex" value="Divorced">Widowed<br>
	Address: <br>
	Street: <input type="text" name="street" value="<?=$street;?>"> <br>
	City/Province: <input type="select" name="city" value="<?=$city;?>"> <br>
	Zip code: <input type="text" name="zip" value="<?=$zip;?>"><br>

	Email Address:	
	<input type="text" name="email" value="<?=$email;?>"><br>

	Mobile Number:
	<input type="text" name="mobNumber" value="<?=$mobNumber;?>"><br>

	Telephone Number:
	<input type="text" name="telNumber" value="<?=$telNumber;?>"><br>

	High School: 
	<input type="text" name="highSchool" value="<?=$highSchool;?>"><br>

	College/University: 
	<input type="text" name="college" value="<?=$college;?>"><br>

	Degree: 
	<input type="text" name="degree" value="<?=$degree;?>"><br>

	Year Graduated:
	<input type="text" name="yearGraduated" value="<?=$yearGraduated;?>"> <br>

	Awards: 
	<input type="text" name="awards" value="<?=$awards;?>"><br>
	
	Seminars Attended (Year, Title): <br>
	<input type="text" name="seminarsAttendded" value="<?=$seminarsAttendded;?>">
	<br>

	Seminars Facilitated (Year, Title): <br>
	<input type="text" name="seminarsFacilitated" value="<?=$seminarsFacilitated;?>">
	<br>

	Extra Curricular Activities: <br>
	<input type="text" name="extraActivities" value="<?=$extraActivities;?>">
	<br>

	Specialties and Techinal Skills (Year, Title): <br>
	<input type="text" name="skills" value="<?=$skills;?>">
	<br>

	Experience (Position, Employer/Company/School): <br>
	<input type="text" name="experience" value="<?=$experience;?>">
	<br>
	<input type="submit" name="resume" value="Submit" />
</form>
</body>
</html>