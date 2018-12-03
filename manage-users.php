<?php
session_start();
if (!isset($_SESSION['adminid'])){
	echo "Only administrator can manage users. Please login!";
	header("Refresh:1; url=login-admin.php");
} else {
	require('backend/connect.php');
	$sql="SELECT UserID,Username,Firstname,Surname,Gender,Email FROM User";
	$result = mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>Users Management | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
	<style>
	.container{
		position: relative;
		line-height: 200%;
		top: 100px;
		width: 740px;
		margin: 0 auto;
		padding: 20px 0px 140px 0px;
		text-align: center;
	}
	.container button{
		margin-left:30px;
		padding:4px 6px;	
		font-size:12px;
	}
	.container button:hover{
		margin-left:30px;
		padding:2px 4px;	
		font-size:12px;
	}
	</style>
	<script type="text/javascript">
	function passwordSecure() {
		alert("For security reasons, user's password can only be viewed in the database. You can only access it by the database with permission!");
	}
	</script>
</head>

<body>
	<?php
	require('topnav.php');
	?>
	
	<div class="container">
		<h1>All Users</h1>
			<table>
			  <tr>
				<th>UserID</th>
				<th>Username</th>
				<th>Password<button onclick="passwordSecure()">?</button></th>
				<th>First Name</th>
				<th>Surname</th>
				<th>Gender</th>
				<th>Email</th>
			  </tr>
			  <?php
			   if(!$result) {
					echo "No users.";
				} else {
					while($row = mysqli_fetch_assoc($result)) {
			  ?>
			  <tr>
				<td><?php echo $row['UserID']?></td>
				<td><?php echo $row['Username']?></td>
				<td>********</td>
				<td><?php echo $row['Firstname']?></td>
				<td><?php echo $row['Surname']?></td>
				<td><?php echo $row['Gender']?></td>
				<td><?php echo $row['Email']?></td>
			  </tr>
			  <?php
}} 
					$link->close();}
			  ?>
			  
			</table>
	</div>

</body>
</html>