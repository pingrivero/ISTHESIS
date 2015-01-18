<?php
/*
this page checks the userName and password of the user and directs it to their
proper page
*/
?> 	
<?php
	$userName=$_POST['userName'];
	$userPass=$_POST['password'];
	
	//database connection
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
	mysql_select_db("lbas_hr") 
		or die(mysql_error());
		
		//method for finding a match in the database from $userName, $userPass
		$result = mysql_query("
		SELECT  person.ID_No as 'ID_No', person.P_Word as 'password', E_Status as 'status', Resume
		FROM person 
		WHERE ID_No = '" . $userName . "' 
		AND P_Word = '" . $userPass . "' 	
			");
			
		$check=mysql_fetch_array($result);
		 if($check['ID_No'] == $userName && $check['password'] == $userPass && $check['status'] =='Applicant'  && $check['Resume'] == null){
					header('location:Resume.php');
					//start of sessions
					session_start();
					//iniating a sessions variable and it's value
					$_SESSION['ID_No']=$check['ID_No'];

		//condition for no match found
		}
		else header('location:ErrorLogIn.html');


?>
