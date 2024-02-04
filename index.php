<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sql="insert into `joiners` (name, gender, age, email, phone)
  values('$name', '$gender','$age', '$email', '$phone')";
  $result=mysqli_query($con, $sql);
  if($result){
    //echo "Data Inserted Successfully";
    
  }else{
    die(mysqli_error($con));
  }
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gym</title>
  </head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      font-style: normal;
      color: white;
      margin: 0px;
      padding: 0px;
      background: url("abc_1.jpg");
    }
  </style>

  <body>
    <header class="header">
      <div class="left">
        <img src="gym_logo(1).png" alt="" />
        <div>Tanmay's Gym</div>
      </div>

      <div class="center">
        <ul class="navbar">
          <li><a href="#" calss="active">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Fitness Package</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </div>

      <div class="right">
        <button class="btn">Sign in</button>
        <button class="btn">Call</button>
      </div>
    </header>
    <div class="container">
      <h1>Join Now!!!</h1>
      <form method="post">
        <div class="fgroup">
          <input type="text" name="name" autocomplete="off" placeholder="Enter Your Name" />
        </div>

        <div class="fgroup">
          <input type="text" name="gender" autocomplete="off" placeholder="Enter Your Gender" />
        </div>

        <div class="fgroup">
          <input type="text" name="age" autocomplete="off" placeholder="Enter Your Age" />
        </div>

        <div class="fgroup">
          <input type="text" name="email" autocomplete="off" placeholder="Enter Your Email Id" />
        </div>

        <div class="fgroup">
          <input type="text" name="phone" autocomplete="off" placeholder="Enter Your Contact Number" />
        </div>

        <button type="submit" name="submit" class="btn" occlick=" let">Submit</button>
      </form>
    </div>
    <div class="footer">
       <footer><p>This website belongs to ©Tanmay'sGym</p></footer>
    </div>
    <script src="inedx.js">
        
    </script>
  </body>
</html>
