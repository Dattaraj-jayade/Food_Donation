<?php 
session_start();//exease the globel varlabe

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone_no = $_POST['phone_no'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)&& !empty($email))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into userss (user_id,user_name,email,address,phone_no,password) values ('$user_id','$user_name','$email','$address','$phone_no','$password')";

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
	<link rel="stylesheet" type="text/css" href="http://localhost/project/style.css">
</head>
<body>


	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"placeholder="full name"><br><br>
			<input id="text" type="text" name="email"placeholder="email"><br><br>
			<input id="text" type="text" name="address"placeholder="address"><br><br>
			<input id="text" type="number" name="phone no"placeholder="phone no"><br><br>
			<input id="text" type="password" name="password"placeholder="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>