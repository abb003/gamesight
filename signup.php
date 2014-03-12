<!DOCTYPE html>
<html>

	<head>
	
	<style>
		a:link {text-decoration:none;}    
		a:visited {text-decoration:none;} 
		a:hover {text-decoration:underline;}   
		a:active {text-decoration:underline;}  
	</style>
	
		<style type="text/css">
        	.errormsg { color: red; }	
  		</style>
  		
		<title>Signup page</title>
	</head>

	<body>
				<link href="gamesightsignup.css" rel="stylesheet">
				
				
			<div id="signupheading">
			<strong>
				Sign-Up Page
			</strong>
				</div>
		
		<div id="leftcol">
			<a href="default.php">Home</a><br>
			<a href="news_page.php">News</a><br>
			<a href="signup.php">Signup</a><br>
			<a href="about.php">About</a><br>
		
		</div>
		

			<?php 
    
  				if(!empty($messages)) {
         		 foreach ($messages as $message) {
             		 echo "<p class='errormsg'>$message</p>";
          			}       
  				}
  			?>

		<div id="main">
		<p>
			This page will allow you to sign up for newsletters designed to keep you up to date on the happenings in the gaming world!		
			Just create an account below to be part of the group!
		</p>
		</div>
					<div id="signupform">
					<form action="signupform.php" method="post">
					<fieldset>
					
						Username: <input type="text" name="username"><br>
						Email: <input type="text" name="email"><br>
						<input type="radio" name="sex" value="male">Male<br>
						<input type="radio" name="sex" value="female">Female<br>						
  									
						<input type="submit" value="Submit">									
							
					</fieldset></form>
			</div>
		<div id="footer" style="background-color:#f5f5f5;clear:both;text-align:center;">
Copyright © </div>
					
	</body>

</html>
