<?php 
session_start();
 include("connection.php");
 include("functions.php");

  $user_data = check_login($con);

 

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        
        $food_name = $_POST['food_name'];
        $food_quintity= $_POST['food_quintity'];
        $food_prepeared = $_POST['food_prepeared'];
        $food_exparry = $_POST['food_exparry'];
        

        if(!empty($food_name) && !empty($food_prepeared) && !empty($food_exparry))
        {

            //save to database
             $user_id =  $user_data[ 'user_id'];           
             $query = "insert into food_info(user_id,food_name,food_quintity,food_prepeared,food_exparry) values('$user_id','$food_name','$food_quintity','$food_prepeared','$food_exparry')";
               
               mysqli_query($con, $query);
               

            header("Location: dooo.php");
            die;
        }else
        {
            echo "Please enter some valid information!";
        }
    }

  





?>
<!DOCTYPE html>
<html>
<head>
	<title>donationform</title>
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
                    <li style="color: white;"><a href="dooo.php">Hi <?php  echo $user_data[ 'user_name'];?></a></li>
                    <li><a class ="cta" href="#"><button>contact</button></a></li>
                </ul>
            </nav>
            <section id="one" class="wrapper style2">
                <div class="inner">
                    <div class="box">
                        <div class="image fit">
                            <img src="images/food.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </section>
    <form method="post">
    <table border="3" cellspaing="10"cellpadding="15">
<caption align="top">Donate</caption> 
	   <tr>
            <th >user name</th>
            <th><input id="text" type="text" name="user_name"value="<?php  echo $user_data[ 'user_name'];?>"></th>
        </tr>
        <tr>
            <th >food name</th>
            <th><input id="text" type="text" name="food_name"placeholder="food name"></th>
        </tr>
        <tr>
            <td>food_quantity</td>
            <th><input id="text" type="text" name="food_quintity"placeholder="food_quantity in meals"></th>
        </tr>
        <tr>
            <td>food_prepaid</td>
            <th><input id="date" type="text" placeholder="dd-mm-yy" name="food_prepeared"></th>
        </tr>
        <tr>
            <td><label >food_exp</label></td>
            <th><input id="date" type="text" placeholder="dd-mm-yy" name="food_exparry"></th>
        </tr>
        <tr>
        <th><input id="button" type="submit" value="submit"><th>
        
    </tr>
    
    </table>
    </form> 
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