<?php
header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("error ");
    }//check if we have "submit" action

	//get user's input infomation
	$firstname = $_POST['firstname'];
	$lastname = $_POST['surname'];
    $gender	= $_POST['gender'];
    $username = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['con_password'];
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>Sign Up | FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
</head>

<body>
<div class="wrapper">
<?php
require('topnav.php');
?>

<div class="form_container">
<?php
echo "<h2>You have been successfully registered!". $username .", welcome to FoodDoor!</h2>"
?>
<a class="btn" href="attractions.html" style="padding:10px 20px; border-corner: 4px;">Order Now!</a>
</div>

</body>
</html>
    
