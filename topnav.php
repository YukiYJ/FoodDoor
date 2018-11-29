<?php
require_once('backend/session.php');
?>
<div class="wrapper">
		<nav class="topnav">
			<div id="logo" class="fl_left">
				<a href="index.html"><img src="img/logo.jpg" alt="Homepage"></a>
			</div>
			<div class="topmenu">
				<li><a href="index.php">Menu</a></li>
				<?php
				if(!isset($_SESSION['adminid'])){
					echo('<li><a href="cart.php">Cart</a></li>');
				}
				else {
					echo('<li><a href="manage.php">Management</a></li>');
				}
				?>
				
				<div class="login-btn">
				<?php
				if(!isset($_SESSION['userid']) && !isset($_SESSION['adminid'])){
					echo('<button onclick="location.href=\'login-user.php\'">User</button>');
					echo('<button onclick="location.href=\'login-admin.php\'" style="margin-right:20px;">Admin</button>');
				}
				else {
					echo('<button onclick="location.href=\'logout.php\'" style="margin-right:20px;">Logout</button>');
				}
				?>
				</div>
			</div>
		</nav>
</div>