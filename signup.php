<!DOCTYPE html>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Laguna Bel-Air School Human Resource System</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	<?php
		function getRandomString($length = 10) {
            $validCharacters = "1234567890";
            $validCharNumber = strlen($validCharacters);
         
            $result = "";
         
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            }
         
            return $result;
        }

        $idNo=getRandomString();
		
		
		function getRandomPassword($length = 6) {
            $validCharacters = "qwertyuiopasdfghjklzxcvbnm1234567890";
            $validCharNumber = strlen($validCharacters);
         
            $result = "";
         
            for ($i = 0; $i < $length; $i++) {
                $index = mt_rand(0, $validCharNumber - 1);
                $result .= $validCharacters[$index];
            }
         
            return $result;
        }

        $password=getRandomPassword();
		
		mysql_connect("localhost", "root", "")
			or die(mysql_error());
	
		mysql_select_db("lbas_hr") 
			or die(mysql_error());
			
			$insert = "INSERT INTO person (ID_No, P_Word, E_Status)
			VALUES('". $idNo ."','". $password ."', 'Applicant')";

			$result = mysql_query($insert);
			
			$insertResume = "INSERT INTO resume (ID_No)
			VALUES('". $idNo ."')";

			$result2 = mysql_query($insertResume);
			
				
		
		
		
	?>
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Laguna Bel-Air School Human Resource System			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Back to Homepage
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="signup.php" method="post">
		
			<h1>Generate an applicant account</h1>
			
			<div class="login-fields">
				
				<div class="field">
					<label for="idNo">ID Number:</label>
					ID Number: <input type="text" id="idNo" name="idNo" value="<?php echo"$idNo"?>" class="login" readonly/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>	
					Password: <input type="text" id="password" name="password" value="<?php echo"$password"?>" class="login" readonly/>
				</div> <!-- /field -->
				
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				
				<button class="button btn btn-primary btn-large" Align="center" button onclick="myFunction()">Generate again</button>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
