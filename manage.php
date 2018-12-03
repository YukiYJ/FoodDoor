<?php
session_start();
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>Management | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
	<style>
		.container button{
			margin-left:35px;
			margin-right:35px;
		}
		.container h1 {
			margin-bottom:100px;
		}
	</style>
</head>

<body>
	<?php
	require('topnav.php');
	?>
	
	<div class="container">
		<h1>Website Management</h1>
		<button onclick="location.href='manage-items.php'">Items</button>
		<button onclick="location.href='manage-orders.php'">Orders</button>
		<button onclick="location.href='manage-users.php'">Users</button>
	</div>

</body>
</html>
