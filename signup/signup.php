<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
		body{
			background: #72c8cc;
		}
	label{
		color:white;
		font-size: 20px;
	}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{
        display: inline-block;
		padding: 10px;
		width: 100px;
		color: black;
		background-color: lightblue;
		border: none;
		border: 1px solid black;
		margin: 10px 99px;
	}

	#box{

		background-color: grey;
		margin:  50px auto;
		width: 300px;
		padding: 20px;
		border : 2px solid white;
		border-radius: 8px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 30px;padding-left: 86px;font-size: 25px;color: white;">Signup</div>
             <label for="text">Username: </label>
			<input id="text" type="text" name="user_name"><br><br>
			<label for="password">Password: </label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>