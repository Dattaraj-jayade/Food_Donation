<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from userss where user_id = '$id' limit 1 ";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);//assoc=assouate array
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}
function check_ngo_login($con)
{

	if(isset($_SESSION['ngo_id']))
	{

		$id = $_SESSION['ngo_id'];
		$query = "select * from ngo where ngo_id = '$id' limit 1 ";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$ngo_data = mysqli_fetch_assoc($result);//assoc=assouate array
			return $ngo_data;
		}
	}

	//redirect to login
	header("Location: ngologin.php");
	die;

}
function checke_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from userss where user_id = '$id' limit 1 ";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);//assoc=assouate array
			return $user_data;
		}
	}

	//redirect to login
	header("Location: ../login.php");
	die;

}
function food($con)
{
	$food_info="SELECT * FROM food_info";
	$query=$con->query($food_info);
	$food_data = mysqli_fetch_assoc($query);//assoc=assouate array
			return $food_data;
}
function food_r($con)
{
	$food_r="SELECT * FROM food_request";
	$query=$con->query($food_r);
	$food_r = mysqli_fetch_assoc($query);//assoc=assouate array
			return $food_r;
}
function ngo($con)
{
	$ngo="SELECT * FROM ngo";
	$query=$con->query($ngo);
	$ngo = mysqli_fetch_assoc($query);//assoc=assouate array
			return $ngo;
}
function login($con)
{
	$log_info="SELECT * FROM userss";
	$query=$con->query($log_info);
	$log_data = mysqli_fetch_assoc($query);//assoc=assouate array
			return $log_data;
}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}