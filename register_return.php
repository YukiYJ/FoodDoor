<?php
session_start();
header("Content-Type: text/html; charset=utf8");
    if(!isset($_POST["submit"])){
        exit("error ");
    }//check if we have "submit" action

	//get user's input infomation
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
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
echo "<h2>". $firstname. " " . $surname .", <br>you have been successfully registered! <br>Welcome to FoodDoor!</h2> 
<h3>Please use your username [ ". $username ." ] <br>and password to login.</h3>"
?>
<a class="btn" href="login.php" style="padding:10px 20px; border-corner: 4px;">Login Now!</a>
</div>

</body>
</html>
    
