<!DOCTYPE html>
<!--
Author: Code Apes.
-->
<html>
<head>
	<title>Sign Up | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
	<script>
	<!-- Space for javascript uses-->
	function checkEmail() {
		var email = document.getElementById("email").value;
		atpos = email.indexOf("@");
		dotpos = email.lastIndexOf(".");
		if (atpos < 1 || ( dotpos - atpos < 2 ))
		{
			document.getElementById("email_error").style.display='block';
			document.getElementById("confirm").disabled = true;
		}
		else{
			document.getElementById("email_error").style.display='none';
			document.getElementById("confirm").disabled = false;
		}  
	}
	function checkPassword(){
		if (document.getElementById("password").value != document.getElementById("con_password").value){
			document.getElementById("password_error").style.display='block';
			document.getElementById("confirm").disabled = true;
		}
		else{
			document.getElementById("password_error").style.display='none';
			document.getElementById("confirm").disabled = false;
		}
	}
	function checkGender(){
		if (document.getElementById("gender").value == "default"){
			document.getElementById("gender_error").style.display='block';
			document.getElementById("confirm").disabled = true;
		}
		else{
			document.getElementById("gender_error").style.display='none';
			document.getElementById("confirm").disabled = false;
		}
	}
	function checkAge(){
		if (document.getElementById("age").value == "default"){
			document.getElementById("age_error").style.display='block';
			document.getElementById("confirm").disabled = true;
		}
		else{
			document.getElementById("age_error").style.display='none';
			document.getElementById("confirm").disabled = false;
		}
	}
	
	</script>
</head>

<body>
<div class="wrapper">
	<?php
	require('topnav.php');
	?>
</div>

<div class="form_container">
  <h1>Create a new account</h1>
  <a href="Login.html"><h4>Already a member? Login in</h4></a>
  <form action="/action_page.php">
	<ul class="form_input">
		<li>
        <label for="">First Name</label>
		<input type="text" id="firstname" placeholder="Your first name.." title="No longer than 16 characters" maxlength="16">
		</li>
		
		<li>
		<label for="">Surname</label>
		<input type="text" id="surname" placeholder="Your surname.." title="No longer than 16 characters" maxlength="16">
		</li>
		
		<li>
		<label for="">Gender</label>
		<select id="gender" onclick="checkGender()">
			<option value="default">--Please choose--</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
		<div id="gender_error" class="error">Please choose a gender.</div><br>
		</li>
		
		<li>
		<label for="">Email</label>
		<input type="text" id="email" name="email" placeholder="Your email.." onchange="checkEmail()"required="required">
		<div id="email_error" class="error">You email is not valid.</div>
		</li>
	
		<li>
        <label for="">Username</label>
		<input type="text" id="username" name="username" placeholder="Your username.." title="No longer than 8 characters" maxlength="8" required="required">
		</li>
		
		<li>
        <label for="">Password</label>
		<input type="password" id="password" name="password" placeholder="Your password.."title="No longer than 16 characters." maxlength="16" onchange="checkPassword()" required="required">
		</li>
		
		<li>
        <label for="">Password Again</label>
		<input type="password" id="con_password" name="con_password" placeholder="Confirm Your password.."
		title="No longer than 16 characters." maxlength="16" onchange="checkPassword()"required="required">
		<div id="password_error" class="error">Two passwords didn't match. Please try again.</div>
		</li>

	    <div id="submit">
			<input type="submit" value="Submit"/>
        </div>
	
	</ul>
  </form>
</div>

</body>

</html>
