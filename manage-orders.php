<?php
require_once('backend/session.php');
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>Orders Management | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
	<style>
		.container button{
			margin-left:35px;
			margin-right:35px;
		}
		ul {
			text-align:left;
		}
	</style>
</head>

<body>
	<?php
	require('topnav.php');
	?>
	
	<div class="container">
		<h1>Orders Management</h1><hr>
		<h2>Order1</h2>
		<table>
			<tr>
				<th>FoodID</th>
				<th>Food Name</th>
				<th>Quantity</th>
				<th>Unit Price</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Fried Asparagus</td>
				<td>2</td>
				<td>$38.00</td>
			</tr>
		  	<tr>
				<td>6</td>
				<td>Smoky Burger</td>
				<td>1</td>
				<td>$68.00</td>
			</tr>
			<tr>
				<td>Total Price</td>
				<td></td>
				<td></td>
				<td>$144.00</td>
			</tr>
		</table>
		
		<ul>
			<li>UserID: 2</li>
			<li>Username: Yuki</li>
			<li>Full Name: YU Jing</li>
			<li>Contact Number: 57885246</li>
			<li>Order Time: 18:55pm, Dec 1, 2018</li>
		</ul><hr>
		
		
		<h2>Order2</h2>
		<table>
			<tr>
				<th>FoodID</th>
				<th>Food Name</th>
				<th>Quantity</th>
				<th>Unit Price</th>
			</tr>
			<tr>
				<td>3</td>
				<td>House Salad</td>
				<td>1</td>
				<td>$48.00</td>
			</tr>
		  	<tr>
				<td>5</td>
				<td>Mixed Salad</td>
				<td>1</td>
				<td>$50.00</td>
			</tr>
			<tr>
				<td>Total Price</td>
				<td></td>
				<td></td>
				<td>$98.00</td>
			</tr>
		</table>
		
		<ul>
			<li>UserID: 1</li>
			<li>Username: user</li>
			<li>Full Name: CHEN Dawen</li>
			<li>Contact Number: 97385356</li>
			<li>Order Time: 12:30pm, Dec 1, 2018</li>
		</ul><hr>
	</div>

</body>
</html>
