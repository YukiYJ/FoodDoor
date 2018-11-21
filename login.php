<?php
// 2 hours in seconds
$inactive = 7200; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

session_start();
echo isset($_SESSION['login']);
if(isset($_SESSION['login'])) {
  header('LOCATION:account.php'); die();
}

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}
$_SESSION['testing'] = time(); // Update session
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
<div class="wrapper">
	<!-- top navigation menu -->
	<?php
	require('topnav.php');
	?>
	<!-- end topnav -->
</div>
<div class="form_container">
  <h1>Log in to FoodDoor</h1>
  <a href="register.php"><h4>No Account? Sign up now!</h4></a>
  <?php
  if(isset($_POST['submit'])){
    $username = $_POST['username']; $password = $_POST['password'];
    if($username === 'user01' && $password === 'user2333'){
		$_SESSION['login'] = true; 
		header('LOCATION:indexMember.php'); 
		die();
	} else {
		echo "<h3 style='color:red;'>Username and Password do not match.</h3>";
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
