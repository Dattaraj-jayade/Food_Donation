 <?php 
session_start();//exease the globel varlabe
 error_reporting(0);
	 include("C:/xampp/htdocs/project/connection.php");
	 include("C:/xampp/htdocs/project/functions.php"); 
	 $user_id = $_GET['user_id'];
	 $query1 = "DELETE from userss where  user_id='$user_id'";
	 $query2 = "DELETE from food_info where  user_id='$user_id'";
	 $data = mysqli_query($con,$query1);
	 $data = mysqli_query($con,$query2);

	 if($data)
	 {
	 	echo"<script>alert('record deleted')</script>";
	 }
	 else
	 {
	 	echo"<script>alert('record not deleted')</script>";
	 }