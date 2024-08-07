<?php 

session_start();  //it 

	include("../connection.php");
	include("../functions.php");
	$ngo_data = check_ngo_login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        
        
        $food_quintity= $_POST['food_quintity'];

        if(!empty($food_quintity) )
        {

            //save to database
             $ngo_id =  $ngo_data[ 'ngo_id'];           
             $query = "insert into food_request(ngo_id,food_quintity) values('$ngo_id','$food_quintity')";
               
               mysqli_query($con, $query);
               

            header("Location: ngopro.php");
            die;
        }else
        {
            echo "<script>alert('Please enter some valid information!')</script>";
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
			<div style="font-size: 20px;margin: 10px;color: white;">FOOD REQUEST</div>

			<input id="text" type="text" name="food_quintity"placeholder="food_quintity"><br><br>

			<input id="button" type="submit" value="submit"><br><br>
		</form>
	</div>
</body>
</html>