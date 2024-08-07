<?php 
session_start();
 include("connection.php");
 include("functions.php");

  $user_data = check_login($con);
  $food_data = food($con);
?>
<!DOCTYPE html>

<html>
<head>
	<title>donation</title>
	<!-- <link rel="stylesheet" type="text/css" href="styaless.css"> -->
	<link rel="stylesheet" href="main.css" />

		
</head>
<body class= "subpage">
	<header id="header" >
				<img class="logo"src="images/dooo.jpg" alt="logo"width="70">
		 			Hi <?php  echo $user_data[ 'user_name'];?>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!--  Nav  -->
			<nav id="menu">
				<ul class="links">
					<li><a href="logout.php">logout</a></li>
					<li><a href="donation.php">donate</a></li>
					<li><a class ="cta" href="#two"><button>Contact</button></a></li>
				</ul>
			</nav>
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="images/haaa.jpg" alt="" />
						</div>
					</div>
				</div>
			</section>
	<br>
	<!--donatin-->
	<div class="fieldset">

	<legend>DONATION </legend>
	<table>
	   <tr>
			<th> full name</th>
			<td><input type="text"value="<?php  echo $user_data[ 'user_name'];?>"/></td>
	   </tr>
	   <tr>
			<th> email</th>
			<td><input type="text"value="<?php  echo $user_data['email'];?>"/></td>
	   </tr>
	   <tr>
			<th> address</address></th>
			<td><textarea ><?php  echo $user_data['address'];?></textarea></td>
	   </tr>
	   <tr>
	   		<th>phone no</th>
			<td><input type="text"value="<?php  echo $user_data[ 'phone_no'];?>"/></td>
			
	   </tr>
	   <?php 
	error_reporting(0);

	$query="select user_data.*,food_data.* from userss user_data , food_info food_data where $user_data[user_id]=food_data.user_id";
          $result = mysqli_query($con,$query);
          $pro = mysqli_fetch_assoc($result);//assoc=assouate arra

	?>

	   <tr>
			<th>food name </th>
			<td><input type="text"value="<?php  echo $pro['food_name'];?>"/></td>
			
	   </tr>
	   <tr>
			<th>food_quintity</th>
			<td><input type="text"value="<?php  echo $pro['food_quintity'];?>"/></td>
	   </tr>
	</table>
</div>
	<!--donatin-->
	<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<div id="flexgrid">
						<div>
                            <header>
                            <h2>Food Bank</h2>
                             </header>
                            <p>Food Bank is a Website which will provide food to  million of peoples.
                             14.5% of our population is undernourished
                            20.8% of children under 5 are underweight
                            So our Work is to provide the Food to the needy and poor peoples.</p>
                        
                         </div>
                        <pre></pre>

                        <div>
                              
                        <header>
                                <h2>Contact</h2>
                            </header>
                            <i class="fa fa-phone" style="font-size:20px;"> 8431500465 </i>
                        </br>
                        </br>
                            <i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"> Djayade1123@gmail.com </i>

                        </div>
					</div>
				</div>
			</section>
	
	<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>
</body>

</html>
