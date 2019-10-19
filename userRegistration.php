<?php
 include('dbconnection.php');
 
if(isset($_POST["rsignup"]))
      {
        if(($_POST['rname'] == "") || ($_POST['remail'] == "") || ($_POST['rpassword'] == ""))
        {
          $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
        }
        else
        {
        $sql="SELECT Email FROM rtable WHERE Email='".$_POST['remail']."'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
          $regmsg = '<div class="alert alert-warning mt-2" role="alert">Alert! Email already register please try another one</div>';
        }
        else
        {
        $name=$_POST['rname'];
        $email=$_POST['remail'];
        $password=$_POST['rpassword'];

        $sql="INSERT INTO rtable(Name,Email,Password) VALUES('$name','$email','$password')";
        $result=$conn->query($sql);
        if($result) 
        {
          $regmsg = '<div class="alert alert-success mt-2" role="alert">!Successfully Account Created </div>';
        } 
        else
        {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> !Error please try again </div>';
        }
        } 
        }
      }
?>
<!--Registration section--->
  <div class="container pt-5" id="Registration">
  <h2 class="text-center">Create an Account</h2>  
  <div class="row mt-4 mb-4">
  <div class="col-md-6 offset-md-3">
  <form action="" class="shadow-lg p-3 mb-5 bg-light rounded" method="POST">
  <div class="form-group">
  <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
  <input type="text" class="form-control" placeholder="Name" name="rname"  autocomplete="on">
  </div>
  <div class="form-group">
  <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
  <input type="email" class="form-control" placeholder="Email" name="remail"  autocomplete="on">
  <small class="form-text">We will never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
  <input type="Password" class="form-control" placeholder="Password" name="rpassword" >
  </div>
  <button type="submit" class="btn btn-danger mt-4 btn-block shadow-sm font-weight-bold" name="rsignup">Sign Up</button>
  <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy </em>  
  <?php if(isset($regmsg)) {echo $regmsg; } ?>
    </form>
    </div>
    </div>
    </div>
    <!--End Registration section--->

      