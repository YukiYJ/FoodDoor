<?php
require_once('backend/session.php');
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>Admin Log In | FoodDoor</title>
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
	<h1 style="margin-bottom:40px;">Log in FOR ADMIN</h1>
  <?php
  if(isset($_POST['submit'])){
    $username = $_POST['username']; $password = $_POST['password'];
    if($username === 'admin' && $password === 'admin2333'){
		#$_SESSION['login_admin'] = true;
		$_SESSION['adminid'] = $username;
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
