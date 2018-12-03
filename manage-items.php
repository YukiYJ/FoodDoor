<?php
session_start();
if (!isset($_SESSION['adminid'])){
	echo "Only administrator can manage users. Please login!";
	header("Refresh:1; url=login-admin.php");
} else {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Items management</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/loginPage.css">

<style>
.form_input li label {
	width:100px;
	height:40px;font-size:15px;}
.form_input {
    border: 1px solid #f0f0f0;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 2px #f0f0f0;
	padding: 15px 50px;
margin-top:30px;
}
input[type=text]{
    padding: 5px;
    margin: 5px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	height: 40px;
	font-size: 15px;
}
button {
	padding:8px 10px;
	font-size:13px;
}
button:hover {
	padding:6px 8px;
	font-size:13px;
}
table{ margin-top:30px;}

</style>
</head>
<body>
<!-- top navigation menu -->
<?php
require('topnav.php');
?>
<div class="container">
	<h1>Items Management</h1>
	<a href="#add"><button>+ Add New Item</button></a>
	<a href='#edit'><button>Edit Price</button></a>
	<form id="edit">
			<ul class="form_input">
				<h3>Edit Item Price</h3>
				<li>
					<label for="">Food ID:</label>
					<input id="edit_foodID" type="text" size="28" required/>
				</li>
				
				<li>
					<label for="">Food Price:</label>
					<input id="edit_foodprice" type="text" size="28" required/>
				</li>
				
				<input type="reset" name="reset" id="resetbtn" value="Reset"/>
				<input type="button" id="btnAddFood" onclick="editPrice()" value="Confirm"/>
			</ul>
	</form>	
	
	<table id="item"></table>

	<script>
	var obj = {"food":[
	  {"id": 1,"type": "appetizer","name": "Fried Asparagus","price": "38.00","ingredients": "asparagus"},
	  {"id": 2,"type": "appetizer","name": "Boneless Wings","price": "40.00","ingredients": "chicken wings"},
	  {"id": 3,"type": "salad","name": "House Salad","price": "48.00","ingredients": "chicken, vegetables"},
	  {"id": 4,"type": "salad","name": "Shrimp Salad","price": "58.00","ingredients": "shrimps, vegetables"},
	  {"id": 5,"type": "salad","name": "Mixed Salad","price": "50.00","ingredients": "vegetables, fruits"},
	  {"id": 6,"type": "burger","name": "Smoky Burger","price": "68.00","ingredients": "bread, beef, lettuce"},
	]};
	var html = "<tr><th>FoodID</th><th>Type</th><th>Name</th><th>Price</th><th>Description</th><th>Delete</th></tr>";
	for (var i = 0; i < obj.food.length; i++) {

		html+="<tr id='"+obj.food[i].id+"'>";
		html+="<td>" + obj.food[i].id + "</td>";
		html+="<td>" + obj.food[i].type + "</td>";
		html+="<td>" + obj.food[i].name + "</td>";
		html+="<td>" + obj.food[i].price + "</td>";
		html+="<td>" + obj.food[i].ingredients + "</td>";
		html+="<td><button type='submit' onclick='deleteItem(\""+obj.food[i].id+"\")'/>Delete</button></td>";
		html+="</tr>";
	}

	document.getElementById("item").innerHTML =html;

	function deleteItem(id) {
    	var elem = document.getElementById(id);
    	return elem.parentNode.removeChild(elem);
	}

	function addItem() {
		var foodID = document.getElementById("foodID").value;
		var foodtype = document.getElementById("foodtype").value;
		var foodname = document.getElementById("foodname").value;
		var foodprice = document.getElementById("foodprice").value;
		var foodigd= document.getElementById("foodigd").value;
		
		var newFood = {"id": null,"type": null,"name": null,"price": 0.00,"ingredients": null};
		newFood.id = foodID;
		newFood.type = foodtype;
		newFood.name = foodname;
		newFood.price = foodprice;
		newFood.ingredients= foodigd;
		obj.food.push(newFood);
		
		var html1 = "<tr><th>FoodID</th><th>Type</th><th>Name</th><th>Price</th><th>Description</th><th>Delete</th></tr>";
		for (var i = 0; i < obj.food.length; i++) {

		html1+="<tr id='"+obj.food[i].id+"'>";
		html1+="<td>" + obj.food[i].id + "</td>";
		html1+="<td>" + obj.food[i].type + "</td>";
		html1+="<td>" + obj.food[i].name + "</td>";
		html1+="<td>" + obj.food[i].price + "</td>";
		html1+="<td>" + obj.food[i].ingredients + "</td>";
		html1+="<td><button type='submit' onclick='deleteItem(\""+obj.food[i].id+"\")'/>Delete</button></td>";
		html1+="</tr>";
		}

		document.getElementById("item").innerHTML =html1;
	}

	function editPrice() {

		var foodID = document.getElementById("edit_foodID").value;
		var newPrice = document.getElementById("edit_foodprice").value;
		for(var i = 0; i < obj.food.length; i++) {
			if(obj.food[i].id==foodID){
				obj.food[i].price = newPrice;
			}
		}

		var html2 = "<tr><th>FoodID</th><th>Type</th><th>Name</th><th>Price</th><th>Description</th><th>Delete</th></tr>";
		for (var i = 0; i < obj.food.length; i++) {

		html2+="<tr id='"+obj.food[i].id+"'>";
		html2+="<td>" + obj.food[i].id + "</td>";
		html2+="<td>" + obj.food[i].type + "</td>";
		html2+="<td>" + obj.food[i].name + "</td>";
		html2+="<td>" + obj.food[i].price + "</td>";
		html2+="<td>" + obj.food[i].ingredients + "</td>";
		html2+="<td><button type='submit' onclick='deleteItem(\""+obj.food[i].id+"\")'/>Delete</button></td>";
		html2+="</tr>";
		}

		document.getElementById("item").innerHTML =html2;

	}


	</script>
		

	<form id="add">
			<ul class="form_input">
				<h3>Add New Item</h3>
				<li>
					<label for="foodID">Food ID:</label>
					<input id="foodID" name="food" type="text" size="28" required/>
				</li>
				<li>
					<label for="foodtype">Food Type:</label>
					<input id="foodtype" name="foodtype" type="text" size="28" required/>
				</li>
				<li>
					<label for="foodname">Food Name:</label>
					<input id="foodname" name="foodname" type="text" size="28" required/>
				</li>
				<li>
					<label for="foodprice">Food Price:</label>
					<input id="foodprice" name="foodprice" type="text" size="28" required/>
				</li>
				<li>
					<label for="foodigd">Ingredients:</label>
					<input id="foodigd" name="foodigd" type="text" size="28" required/>
				</li>
				<input type="reset" name="reset" id="resetbtn" value="Reset"/>
			
				<input type="button" id="btnAddFood" onclick="addItem()" value="Add"/>
				

			</ul>
	</form>


</div>

</body>
</html>

<?php } ?>