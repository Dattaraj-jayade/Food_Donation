<?php

session_start();

if(isset($_SESSION['ngo_id']))
{
	unset($_SESSION['ngo_id']);

}

header("Location: ../index.php");
die;