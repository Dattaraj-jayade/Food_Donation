 <?php 
session_start();//exease the globel varlabe
 
	 include("../connection.php");
	 include("../functions.php");
error_reporting(0);
  $log_data = login($con);
  $food_data = food($con);
  $user_id = $_GET['user_id'];
  $user_name = $_GET['user_name'];
  $email =$_GET['email'];
  $address = $_GET['address'];
  $phone_no =$_GET['phone_no'];
  $food_name = $_GET['food_name'];
  $food_quintity =$_GET['food_quintity'];
  $food_prepeared =$_GET['food_prepeared'];
  $food_exparry =$_GET['food_exparry'];
  
?>


<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/project/style.css">
</head>
<body>


	<div id="box">
		
		<form method="GET">
			<div style="font-size: 20px;margin: 10px;color: white;">UPDATE</div>
		user_id<input id="text" type="text" name="user_id"value="<?php  echo "$user_id";?>"><br><br>
		user_name<input id="text" type="text" name="user_name"value="<?php  echo "$user_name";?>"><br><br>
		email    <input id="text" type="text" name="email"value="<?php  echo "$email";?>"><br><br>
		address  <input id="text" type="text" name="address"value="<?php  echo "$address";?>"><br><br>
		phone no <input id="text" type="number" name="phone_no"value="<?php  echo "$phone_no";?>"><br><br>
		food_name      <input id="text" type="text" name="food_name"value="<?php  echo "$food_name";?>"><br><br>
		food_quintity <input id="text" type="text" name="food_quintity"value="<?php  echo "$food_quintity";?>"><br><br>
		food_prepeared<input id="text" type="text"  name="food_prepeared"value="<?php  echo  "$food_prepeared";?>"><br><br>
		food_exparry <input id="text" type="text" name="food_exparry"value="<?php  echo "$food_exparry";?>"><br><br>
			     <input id="button" type="submit" value="update" name="submit"><br><br>
				 <a href="dashboard.php">Click to Login</a><br><br>
		
		</form>
	</div>
</body>
</html>
<?php
 
 if($_GET['submit'])
 {
  $user_id =  $_GET[ 'user_id'];
  $user_name=$_GET['user_name'];
  $email=$_GET['email']; 
  $address=$_GET['address'];
  $phone_no=$_GET['phone_no'];
  $food_name=$_GET['food_name'];  
  $food_quintity=$_GET['food_quintity']; 
  $food_prepeared=$_GET['food_prepeared']; 
  $food_exparry=$_GET['food_exparry'];

  $uupde="UPDATE USERSS SET user_id='$user_id',user_name='$user_name',email='$email',address='$address',phone_no='$phone_no' WHERE user_id='$user_id'";
  $fupde="UPDATE FOOD_INFO SET user_id='$user_id',food_name='$food_name',food_quintity='$food_quintity',food_prepeared='$food_prepeared',food_prepeared='$food_prepeared' WHERE user_id='$user_id'";
  if(mysqli_query($con,$uupde) and mysqli_query($con,$fupde))
{
	echo "<script>alert('updated')</script>";
}
else
{
	echo"<script>alert('failed to update')</script>";
}
 }
 ?>