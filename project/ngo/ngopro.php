<?php 
session_start();
 include("../connection.php");
 include("../functions.php");

  $ngo_data = check_ngo_login($con);
  $food_r = food_r($con);
?>
<!DOCTYPE html>

<html>
<head>
	<title>ngo</title>
	<!-- <link rel="stylesheet" type="text/css" href="styaless.css"> -->
	<link rel="stylesheet" href="../main.css" />

		
</head>
<body class= "subpage">
	<header id="header" >
				<img class="logo"src="../images/dooo.jpg" alt="logo"width="70">
		 			Hi <?php  echo $ngo_data[ 'ngo_name'];?>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!--  Nav  -->
			<nav id="menu">
				<ul class="links">
					<li><a href="ngologout.php">logout</a></li>
					<li><a href="food_r.php">food requst</a></li>
					<li><a class ="cta" href="#"><button>contact</button></a></li>
				</ul>
			</nav>
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="../images/NGO.png" alt="" />
						</div>
					</div>
				</div>
			</section>
	
	<br>
	<!--donatin-->
	<div class="fieldset">

	<legend>NGO </legend>
	<table>
	   <tr>
			<th> ngo name</th>
			<td><input type="text"value="<?php  echo $ngo_data[ 'ngo_name'];?>"/></td>
	   </tr>
	   <tr>
			<th> email</th>
			<td><input type="text"value="<?php  echo $ngo_data['ngo_email'];?>"/></td>
	   </tr>
	   <tr>
			<th> address</address></th>
			<td><textarea ><?php  echo $ngo_data['ngo_address'];?></textarea></td>
	   </tr>
	   <tr>
	   		<th>phone no</th>
			<td><input type="text"value="<?php  echo $ngo_data[ 'ngo_phone_no'];?>"/></td>
			
	   </tr>
	   <?php 
	error_reporting(0);

	$query="select ngo_data.*,food_r.* from ngo ngo_data , food_request food_r where $ngo_data[ngo_id]=food_r.ngo_id";
          $result = mysqli_query($con,$query);
          $pro = mysqli_fetch_assoc($result);//assoc=assouate arra

	?>
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
                                <h3>Contact</h3>
                            </header>
                            <i class="fa fa-phone" aria-hidden="true">8431500465</i>
                        </br>
                            <i class="fa fa-email">Djayade1123@gmail.com</i>
                        </div>
                        <div>
                            <header>
                            <h3>Food Bank</h3>
                            </header>
                            <p>Food Bank is a Website which will provide food to  million of peoples.
                             14.5% of our population is undernourished
                            20.8% of children under 5 are underweight
                            So our Work is to provide the Food to the needy and poor peoples.</p>
                        </div>
                    </div>
                </div>
            </section>
	
	<script src="../js/jquery.min.js"></script>
			<script src="../js/jquery.scrolly.min.js"></script>
			<script src="../js/jquery.scrollex.min.js"></script>
			<script src="../js/skel.min.js"></script>
			<script src="../js/util.js"></script>
			<script src="../js/main.js"></script>
</body>

</html>