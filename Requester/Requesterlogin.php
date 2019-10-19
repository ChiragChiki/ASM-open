<?php
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
  if(isset($_REQUEST['rEmail'])){
    $rEmail = mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
    $rPassword = mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
    $sql = "SELECT Email, Password FROM rtable WHERE Email='".$rEmail."' AND Password='".$rPassword."' limit 1";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
      
      $_SESSION['is_login'] = true;
      $_SESSION['rEmail'] = $rEmail;
      // Redirecting to RequesterProfile page on Correct Email and Pass
      echo "<script> location.href='RequesterProfile.php'; </script>";
      exit;
    } else {
      $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
    }
  }
} else {
  echo "<script> location.href='RequesterProfile.php'; </script>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--Bootstrap  File-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!--Font awesome File-->
   <link rel="stylesheet" href="../css/all.min.css">
   <!--Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  
   <!--CSS File-->
   <link rel="stylesheet" href="../css/custom.css">

    <title>ASM</title>
</head>
<body>
  <!--Nav bar-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
  <a href="#" class="navbar-brand">Automobile Service Management</a>
  <span class="navbar-text">Customer Happiness is our Moto</span>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
   <span class="navbar-toggler-icon"></span>   
  </button>
  <div class="collapse navbar-collapse text-right" id="myMenu" >
   <ul class="navbar-nav pl-5">
       <li class="nav-item "><a href="../index.php" class="nav-link">Home</a></li>
   </ul>
  </div>
  </nav>
 <!--End Nav bar-->
 <!--start jumbotron --->
 
 <div class="jumbotron back-img-login" style="background-image:url(../images/manufacturer.jpg);">
 <div class="text-center mt-2 text-white" style="font-size: 30px;">
 <i class="fas fa-user-secret text-danger"></i>
    <span>ASM Login</span>
    <p class="ml-5" style="font-size: 12px;"> <span>Requester Area(Demo)</span>
  </div>
  <div class="row small-log">
    <div class="col-md-6 offset-3 ">
    <form action="" method="POST">
  <div class="form-group">
  <i class="fas fa-user text-danger "></i><label for="email" class="font-weight-bold text-white">Email</label>
    <input type="text" class="form-control opacity" name="rEmail" placeholder="Email">
</div>
<div class="form-group">
  <i class="fas fa-key text-danger"></i><label for="password" class="font-weight-bold text-white">Password</label>
    <input type="password" class="form-control opacity" name="rPassword" placeholder="Password">
</div>
<button type="submit" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold" name="submit" >Login</button>
<?php if(isset($msg)) {echo $msg; } ?>  
</form>
  <div class="text-center"><a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="../index.php">Back
            to Home</a></div>
    </div>
  </div>
  </div>
 
 




<!--Footer section--->
<footer class="container-fluid bg-dark  text-white mt-5 ">
<div class="container footr">
<div class="row py-2 mt-5 ">
<div class="col-md-6">
<span class="pr-2">Follow Us:</span>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
<a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
</div>
<div class="col-md-6 text-right">
<small>Designed by chirag lohar &copy; 2019</small>

</div>
</div>
</div>
</footer>

<!--Javascript-->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
  </body>
  </html>