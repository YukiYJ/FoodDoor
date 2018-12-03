<?php
session_start();
if (isset($_SESSION['userid'])){
	require('backend/connect.php');
	$sql="SELECT * FROM Food";
	$result = mysqli_query($link,$sql);
}
?>

<!DOCTYPE html>
<!--
Author: YU Jing
-->
<html>
<head>
	<title>FoodDoor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">
	<link type="text/css" rel="stylesheet" href="css/menu.css">
</head>

<body>
	<!-- top navigation menu -->
	<?php
	require('topnav.php');
	?>
	<div class="container">
		<h1>Food Ordering</h1>
		
		<?php
		   if(!$result) {
				echo "No food item.";
			} else {
				while($row = mysqli_fetch_assoc($result)) {
		 ?>
			<div class="card" id="<?php echo $row['FoodID']?>">
			  <img class="card-img-top" src="img/<?php echo $row['Image']?>" alt="">
			  <div class="card-body">
				<h4 class="card-title inline"><?php echo $row['Foodname']?></h4>
				<h3 class="card-title inline align_right">$<?php echo $row['Price']?></h3>
				<small><?php echo $row['Foodtype']?></small>
				<a href="#" class="btn">Add to Cart</a>
			  </div>
			</div>

		  <?php
				}} 
				$link->close();
		  ?>
	
		
	</div>
	
	
	
</body>
</html>