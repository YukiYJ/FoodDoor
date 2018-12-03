<?php
session_start();
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>My Cart | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
</head>

<body>
	<?php
	require('topnav.php');
	?>
	<div class="container">
	<?php
	if (!isset($_SESSION['userid'])){
		echo "<h2>You need to login first!</h2>";
		echo('<button onclick="location.href=\'login-user.php\'">Login</button>');
	} else {
		$user = $_SESSION['userid'];?>
		
		
	
	<h1>My Order Cart</h1>
		
		
	<?php
	}
	?>
	</div>

</body>
</html>
