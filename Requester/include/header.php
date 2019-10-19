<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php 
    echo TITLE ?>
    </title>

    <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Custome CSS -->
<link rel="stylesheet" href="../css/custom.css">

</head>
<body>
    <!--Nav bar-->
  <nav class="navbar navbar-dark fixed-top bg-danger  fixed-top shadow-sm">
  <a href="RequesterProfile.php" class="navbar-brand ">Automobile Service Management</a>
  <!-- <span class="navbar-text">Customer Happiness is our Moto</span> -->
 
  </nav>
   <!--End Nav bar-->

 <!--Side bar-->
  <div class="container-fluid mb-5 " style="margin-top:40px;">
  <div class="row">
  <nav class="col-sm-2 bg-light sidebar d-print-none py-5">
  <div class="sidebar-sticky">
  <ul class="nav flex-column">
  <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'RequesterProfile') { echo 'active'; } ?>" href="RequesterProfile.php">
        <i class="fas fa-user"></i>
        Profile <span class="sr-only">(current)</span>
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'SubmitRequest') { echo 'active'; } ?>" href="SubmitRequest.php">
        <i class="fab fa-accessible-icon"></i>
        Submit Request
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'CheckStatus') { echo 'active'; } ?>" href="CheckStatus.php">
        <i class="fas fa-align-center"></i>
        Service Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'Requesterchangepass') { echo 'active'; } ?>" href="Requesterchangepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
  </ul>
  </div>
  </nav>
  