<?php 
session_start();//exease the globel varlabe

	include("../connection.php");
	include("../functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
		$ngo_name = $_POST['ngo_name'];
		$ngo_email = $_POST['ngo_email'];
		$ngo_address = $_POST['ngo_address'];
		$ngo_phone_no = $_POST['ngo_phone_no'];
		$ngo_password = $_POST['ngo_password'];

		if(!empty($ngo_name) && !empty($ngo_password) && !is_numeric($ngo_name)&& !empty($ngo_email))
		{

			//save to database
			$ngo_id = random_num(20);
			$query = "insert into ngo (ngo_id,ngo_name,ngo_email,ngo_address,ngo_phone_no,ngo_password) values ('$ngo_id','$ngo_name','$ngo_email','$ngo_address','$ngo_phone_no','$ngo_password')";

			mysqli_query($con, $query);

			header("Location: ngologin.php");
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

			<input id="text" type="text" name="ngo_name"placeholder="ngo name"><br><br>
			<input id="text" type="text" name="ngo_email"placeholder="ngo email"><br><br>
			<input id="text" type="text" name="ngo_address"placeholder="ngo address"><br><br>
			<input id="text" type="number" name="ngo_phone_no"placeholder="ngo phone no"><br><br>
			<input id="text" type="password" name="ngo_password"placeholder="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="ngologin.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>