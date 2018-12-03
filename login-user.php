<?php
session_start();
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>Log In | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
</head>

<body>
	<!-- top navigation menu -->
	<?php
	require('topnav.php');
	?>
	<!-- end topnav -->

<div class="container">
	<h1>Log in to FoodDoor</h1>
	<a href="register.php"><h4>No Account? -> Sign up now!</h4></a>
  <?php
  if(isset($_POST['submit'])){
    $username = $_POST['username']; $password = $_POST['password'];
    if($username === 'user' && $password === 'user2333'){
		#$_SESSION['login_user'] = true;
		$_SESSION['userid'] = $username;
		header('LOCATION:index.php'); 
		die();
	} else {
		echo "<h3 style='color:red;'>Username and Password do not match. Try again.</h3>";
	}
  }
  ?>
  <form action="" method="POST">
	<ul class="form_input">
		<li>
			<label for="uname">Username</label>
			<input type="text" id="username" name="username" placeholder="Your username.." maxlength="16" required="required">
		</li>
		<li>
			<label for="psword">Password</label>
			<input type="password" id="password" name="password" placeholder="Your password.." maxlength="16" required="required">
		</li>
		<input type="submit" value="Submit" name="submit"/>
  </form>
</div>

</body>

</html>
