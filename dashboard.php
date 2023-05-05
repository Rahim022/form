<!DOCTYPE html>
<?php
	require 'database.php';
	session_start();
 
	if(!ISSET($_SESSION['phone'])){
		header('location:index.php');
	}
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/project/css/bootstrap.min.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - PDO Login and Registration</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3>Welcome!</h3>
			<br />
			<?php
				$id = $_SESSION['phone'];
				$sql = $conn->prepare("SELECT * FROM `users` WHERE `phone`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>
			<center><h4><?php echo $fetch['first_name']." ". $fetch['last_name']?></h4></center>
			<a href = "register.php">Logout</a>
		</div>
	</div>
</body>
</html>