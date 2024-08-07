 <?php 
session_start();//exease the globel varlabe
 error_reporting(0);
	 include("C:/xampp/htdocs/project/connection.php");
	 include("C:/xampp/htdocs/project/functions.php"); 
	 $ngo_id = $_GET['ngo_id'];
	 $query1 = "DELETE from ngo where  ngo_id='$ngo_id'";
	 $query2 = "DELETE from food_request where  ngo_id='$ngo_id'";
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