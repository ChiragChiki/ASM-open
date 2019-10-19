<?php
if(isset($_REQUEST['submit'])) {
 
  if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['message'] == "")){

   $msg = '<div class="alert alert-warning  mt-2" role="alert"> Fill All Fileds </div>';
   
  } else {
  $name = $_REQUEST['name'];
  $subject = $_REQUEST['subject'];
  $email = $_REQUEST['email'];
  $message = $_REQUEST['message'];
 
  $mailTo = "fenamilk@gmail.com";
  $headers = "From: ". $email;
  $txt = "You have received an email from ". $name. ".\n\n".$message;
  mail($mailTo, $subject, $txt, $headers);
  $msg = '<div class="alert alert-success" role="alert"> Sent Successfully </div>';
 
 }
 }

?>
 <!--Column first form contact section-->
<div class="col-md-8">
  <form action="" method="POST">
  <input type="text" class="form-control" name="name" placeholder="Name"><br>
  <input type="subject" class="form-control" name="subject" placeholder="Subject"><br>
  <input type="email" class="form-control" name="email" placeholder="Email"><br>
  <textarea class="form-control mb-2" name="message" placeholder="How can we help you?" style="height:150px;"></textarea>
  <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
  </form>
  <?php if(isset($msg)) {echo $msg; } ?>
  </div>
  <!--End Column first form contact section-->