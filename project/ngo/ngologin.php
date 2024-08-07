<?php 

session_start();
   include("../connection.php");
   include("../functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$ngo_email = $_POST['ngo_email'];
		$ngo_password = $_POST['ngo_password'];

		if(!empty($ngo_email) && !empty($ngo_password) && !is_numeric($ngo_email))
		{

			//read from database
			$query = "select * from ngo where ngo_email = '$ngo_email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$ngo_data = mysqli_fetch_assoc($result);
					
					
					if($ngo_data['ngo_password'] === $ngo_password)
					{

						
						  $_SESSION['ngo_id'] = $ngo_data['ngo_id'];
						  header("Location:ngopro.php");
						  die;
					
							
					}
				}
			}
			
			echo "<script>alert('wrong username or password!')</script>";
		}else
		{
			echo "<script>alert('wrong username or password!')</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/project/style.css">
</head>
<body>

	<div id="box" >
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">NGO Login</div>

			<input id="text" type="text" name="ngo_email"placeholder="email"><br><br>
			<input id="text" type="password" name="ngo_password"placeholder="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="ngosinup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>