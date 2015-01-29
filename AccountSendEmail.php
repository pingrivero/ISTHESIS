
<?php

	$user=$_POST['idNo'];
	$password=$_POST['password'];
	$email=$_POST['email'];


   require_once "Mail.php";

	$from = '<LBASAdmin@noreply.com>';
	$to = $email;
	$subject = 'LBAS Account';
	$body = "Hi, Sir/Mam \n Thank you for your interest for Applying in Laguna Bel Air School. Here are your log in details: \n \n ID Number: $user \n Password: $password";

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'iamgastonvelarde@gmail.com',
			'password' => 'feb191995'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo('<p>' . $mail->getMessage() . '</p>');
	} else {
		echo('<p>Message successfully sent!</p>');
		
		echo"$user";
		echo "$password";
		
		$host="localhost"; // Host name 
		$username="root"; // Mysql username 
		$pass=""; // Mysql password 
		$db_name="lbas_hr"; // Database name 
		$tbl_name="person"; // Table name
		
		mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
		mysql_select_db("$db_name")or die("cannot select DB");
		
		
		$insert="INSERT INTO $tbl_name (ID_No, P_Word, E_Status )
				VALUES('". $user ."', '". $password ."', 'Applicant')";
				
				
				$result=mysql_query($insert);

		//condition that check if inserting is successful
				if($result){
					echo " &nbsp Successful";
					echo "<BR><BR>";
				} else {
					echo "&nbsp Error".mysql_error();
				}

   }
?>

