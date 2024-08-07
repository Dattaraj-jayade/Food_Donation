<?php
session_start();
   include("../connection.php");
   include("../functions.php");
   
     
  $user_data= checke_login($con);
  $log_data = login($con);
  $food_data = food($con);
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
                    <li><a href="ngodash.php">NGO</a></li>
                    <li style="color: white; ">Hi <?php  echo $user_data[ 'usertype'];?></li>
                    <li><a class ="cta" href="#"><button>contact</button></a></li>
                </ul>
            </nav>
    <div class="container">
      <table class="table table-borser">
        <thead>
          <tr>
            <th># No</th>
            <th>full name</th>
            <th>email</th>
            <th>address</th>
            <th>phone NO</th>
            <th>last visit</th>
            <th>food name</th>
            <th>food quantity</th>
            <th>food prepeared</th>
            <th>food exparry</th>
            <th>user id</th>
            <th>update/delate</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query="select log_data.*,food_data.* from userss log_data , food_info food_data where log_data.user_id=food_data.user_id";
          $result = mysqli_query($con,$query);
          $user_name=1;
          while ($row=mysqli_fetch_assoc($result)) 
          {
            
          echo "
          <tr>
            <td>" .$user_name."</td>
            <td>".$row['user_name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['address']."</td>
            <td>".$row['phone_no']."</td>
            <td>".$row['date']."</td>
            <td>".$row['food_name']."</td>
            <td>".$row['food_quintity']."</td>
            <td>".$row['food_prepeared']."</td>
            <td>".$row['food_exparry']."</td>
            <td>".$row['user_id']."</td>
            <td><a href = 'update.php?user_id=$row[user_id]&user_name=$row[user_name]&email=$row[email]&address=$row[address]&phone_no=$row[phone_no]&food_name=$row[food_name]&food_quintity=$row[food_quintity]&food_prepeared=$row[food_prepeared]&food_exparry=$row[food_exparry]'>update</a>
            <a href='deleat.php?user_id=$row[user_id]'>delete</a></td>  
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
