<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	
	<h1>Login Succesful</h1>
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<div></div>
	<br>
	<a href="logout.php">Logout</a>
</body>
</html>