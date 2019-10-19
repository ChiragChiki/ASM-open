<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--Bootstrap  File-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <!--Font awesome File-->
   <link rel="stylesheet" href="css/all.min.css">
   <!--Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  
   <!--CSS File-->
   <link rel="stylesheet" href="css/custom.css">

    <title>ASM</title>
</head>
<body>
  <!--Nav bar-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
  <a href="index.php" class="navbar-brand">Automobile Service Management</a>
  <span class="navbar-text">Customer Happiness is our Moto</span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>   
  </button>
  <div class="collapse navbar-collapse text-right" id="myMenu" >
   <ul class="navbar-nav pl-5">
       <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
       <li class="nav-item"><a href="#Registration" class="nav-link">Registration</a></li>
       <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
       <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      
  </ul>
</div>
  </nav>
   <!--Nav bar-->
  
   <!--start jumbotron header  --->
  <header class="jumbotron back-img" style="background-image:url(images/CAR.jpg);">
  <div class="myclass">
  <h1 class="text-uppercase text-danger mt-3 font-weight-bold">Welcome to the ASM</h1>
  <p class="font-italic text-white mt-3 ml-4">Customer Happiness is our Moto</p>
  <a href="Requester/RequesterLogin.php" class="btn btn-success ml-4">Login</a>
  <a href="#Registration" class="btn btn-danger ml-5" >Sign Up</a>
</div>
  </header>
<!--End jumbotron header  --->

<!--Container area for service descrition  --->
<div class="container">
    <div class="jumbotron text-center servtxt">
        <h3 class="text-center ">ASM Services</h3>
        <p>ASM Services is india's leading chain of multi-brand car 
           service workshop offering wide array of services. We focus on enhancing your uses experience by offering 
           world-class car maintenance services. Our sole mission  is "To provide car care servies to keep your car
           perfect and customers happy and smiling".
           With well-equipped service centers and fully trained and experienced mechanic, we provide you a quality services
           with excellent packages that are designed to offer you great saving.
    
        </p>
        <img src="images/Basic.jpg" class="img-fluid"  alt="Basic.jpg">
    </div>
</div> 
<!--End of Container--->

<!--Start services section--->
<div class="container text-center border-bottom" id="Services">
 <h2>Our Services</h2>
 <div class="row mt-4">
    <div class="col-sm-4">
    <a href="Requester/Requesterlogin.php"><i class="fas fa-car fa-8x text-success"></i></a>
    <h4 class="mb-3">Spare Parts</h4> 
    </div> 
 
    <div class="col-sm-4">
    <a href="Requester/Requesterlogin.php"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
    <h4 class="mb-3">Preventive Maintenance</h4> 
    
    </div>
    <div class="col-sm-4">
    <a href="Requester/Requesterlogin.php"><i class="fas fa-cogs fa-8x text-info"></i></a>
    <h4 class="mb-3">Fault Repair</h4> 
    </div> 
 </div>
 </div>
<!--End of Our services section--->

<!--Registration section--->
<?php

include('userRegistration.php');

?>
<!--End of Registration section--->

<!--Customer section--->
<div class="jumbotron bg-danger">
  <div class="container">
    <h2 class="text-center text-white mb-5">Happy Customer's</h2> 
<div class="row ">
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow-lg mb-2">
  <div class="card-body text-center">
     <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
     <h4 class="Card-title">Amit Kumar</h4>
     <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, quia non dolores soluta suscipit vero!</p>
  </div>
  </div> 
  </div>
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow-lg mb-2">
  <div class="card-body text-center">
      <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt2">
      <h4 class="Card-title">Minal Shah</h4>
      <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, quia non dolores soluta suscipit vero!</p>
  </div>
  </div> 
  </div>
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow-lg mb-2">
  <div class="card-body text-center">
       <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt3">
       <h4 class="Card-title">Sumit Goyal</h4>
       <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, quia non dolores soluta suscipit vero!</p>
  </div>
  </div> 
  </div>
  <div class="col-lg-3 col-sm-6">
  <div class="card shadow-lg mb-2">
  <div class="card-body text-center">
       <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt4">
       <h4 class="Card-title">Shreya Trivedi</h4>
       <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, quia non dolores soluta suscipit vero!</p>
  </div>
  </div> 
  </div>
  </div>
</div>
</div>
<!--End Customer section--->

<!--Contact section--->
<div class="container" id="Contact">
<h2 class="text-center mb-4">Contact Us</h2>
<div class="row">
   <!--Column first form contact section-->
 <?php
 include('contactus.php');
 ?>
 <!--End Column first form contact section-->
  <div class="col-md-4 text-center">
  <strong>Headquarter: </strong><br>
  ASM Pvt Ltd,<br>
  Ashok nagar,Udaipur<br>
  Rajasthan-(313001)<br>
  Phone No.-0294-00000<br>
  <a href="#" target="_blank">www.ASM.com</a><br>
  <br><br>
  <strong>Branch: </strong><br>
  ASM Pvt Ltd,<br>
  Meera nagar,Udaipur<br>
  Rajasthan-(313001)<br>
  Phone No.-0294-00000<br>
  <a href="#" target="_blank">www.ASM.com</a><br>
  </div>
</div>
</div>
<!--End contact section--->

<!--Footer section--->
<footer class="container-fluid bg-dark mt-4 text-white">
<div class="container">
<div class="row py-2 mt-5">
<div class="col-md-6">
<span class="pr-2">Follow Us:</span>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
</div>
<div class="col-md-6 text-right design-footer">
<small >Designed by chirag lohar &copy; 2019</small>
<small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
</div>
</div>
</div>
</footer>
<!-------------------------------------End Footer section----------------------------------------------->

<!--Javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>