<?php
session_start();
   include("../connection.php");
   include("../functions.php");
   
     
  $user_data= checke_login($con);
  $ngo = ngo($con);
  $food_r= food_r($con);
?>
  <!doctype html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../main.css" />
    </head>
    <body class= "subpage">
    <header id="header" >
                <img class="logo"src="../images/dooo.jpg" alt="logo"width="70">
                    Hi <?php  echo $user_data[ 'usertype'];?>
                <a href="#menu" class="toggle"><span>Menu</span></a>
            </header>

        <!--  Nav  -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="../logout.php">logout</a></li>
                    <li><a href="dashboard.php">Restaurants</a></li>
                    <li style="color: white; ">Hi <?php  echo $user_data[ 'usertype'];?></li>
                    <li><a class ="cta" href="#"><button>contact</button></a></li>
                </ul>
            </nav>
    <div class="container">
      <table class="table table-borser">
        <thead>
          <tr>
            <th># No</th>
            <th>NGO name</th>
            <th>NGO email</th>
            <th>NGO address</th>
            <th>NGO phone NO</th>
            <th>NGO last visit</th>
            <th>food quantity</th>
            <th>update/delate</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query="select ngo.*,food_request.* from ngo , food_request where ngo.ngo_id=food_request.ngo_id";
          $result = mysqli_query($con,$query);
          $user_name=1;
          while ($row=mysqli_fetch_assoc($result)) 
          {
            
          echo "
          <tr>
            <td>" .$user_name."</td>
            <td>".$row['ngo_name']."</td>
            <td>".$row['ngo_email']."</td>
            <td>".$row['ngo_address']."</td>
            <td>".$row['ngo_phone_no']."</td>
            <td>".$row['date']."</td>
            <td>".$row['food_quintity']."</td>
            <td>".$row['ngo_id']."</td>
            <td><a href = 'ngoupdate.php?ngo_id=$row[ngo_id]&ngo_name=$row[ngo_name]&ngo_email=$row[ngo_email]&ngo_address=$row[ngo_address]&ngo_phone_no=$row[ngo_phone_no]&food_quintity=$row[food_quintity]'>update</a>
            <a href='ngodeleat.php?ngo_id=$row[ngo_id]'>delete</a></td>  
          </tr>";

          
          $user_name++;
          }
          ?>
           
        </tbody>
      </table>
    </div>
  </body>
  </html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../js/jquery.min.js"></script>
            <script src="../js/jquery.scrolly.min.js"></script>
            <script src="../js/jquery.scrollex.min.js"></script>
            <script src="../js/skel.min.js"></script>
            <script src="../js/util.js"></script>
            <script src="../js/main.js"></script>
  </body>
  </html>
