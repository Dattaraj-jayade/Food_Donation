 <?php 
session_start();//exease the globel varlabe
 
	 include("../connection.php");
	 include("../functions.php");
error_reporting(0);
  $log_data = login($con);
  $food_data = food($con);
  $ngo_id = $_GET['ngo_id'];
  $ngo_name = $_GET['ngo_name'];
  $ngo_email =$_GET['ngo_email'];
  $ngo_address = $_GET['ngo_address'];
  $ngo_phone_no =$_GET['ngo_phone_no'];
  $food_quintity =$_GET['food_quintity'];
 
  
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
		user_id<input id="text" type="text" name="ngo_id"value="<?php  echo "$ngo_id";?>"><br><br>
		user_name<input id="text" type="text" name="ngo_name"value="<?php  echo "$ngo_name";?>"><br><br>
		email    <input id="text" type="text" name="ngo_email"value="<?php  echo "$ngo_email";?>"><br><br>
		address  <input id="text" type="text" name="ngo_address"value="<?php  echo "$ngo_address";?>"><br><br>
		phone no <input id="text" type="number" name="ngo_phone_no"value="<?php  echo "$ngo_phone_no";?>"><br><br>
		food_quintity <input id="text" type="text" name="food_quintity"value="<?php  echo "$food_quintity";?>"><br><br>
			     <input id="button" type="submit" value="update" name="submit"><br><br>
				 <a href="dashboard.php">Click to dashboard</a><br><br>
		
		</form>
	</div>
</body>
</html>
<?php
 
 if($_GET['submit'])
 {
  $user_id =  $_GET[ 'ngo_id'];
  $user_name=$_GET['ngo_name'];
  $email=$_GET['ngo_email']; 
  $address=$_GET['ngo_address'];
  $phone_no=$_GET['ngo_phone_no'];  
  $food_quintity=$_GET['food_quintity']; 
  

  $uupde="UPDATE ngo SET ngo_id='$ngo_id',ngo_name='$ngo_name',ngo_email='$ngo_email',ngo_address='$ngo_address',ngo_phone_no='$ngo_phone_no' WHERE ngo_id='$ngo_id'";
  $fupde="UPDATE food_request SET ngo_id='$ngo_id',food_quintity='$food_quintity'WHERE ngo_id='$ngo_id'";
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