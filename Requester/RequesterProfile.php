<?php
define('TITLE', 'Requester Profile');
define('PAGE', 'RequesterProfile');
include('include/header.php'); 
include('../dbConnection.php');

session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['rEmail'];
   } else {
    echo "<script> location.href='Requesterlogin.php'; </script>";
   }
  

$sql = "SELECT * FROM rtable WHERE Email='$rEmail'";
$result = $conn->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row["Name"]; 
 }
 if(isset($_REQUEST['nameupdate'])){
    if(($_REQUEST['rName'] == "")){
     // msg displayed if required field missing
     $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
    } else {
     $rName = $_REQUEST["rName"];
     $sql = "UPDATE rtable SET name = '$rName' WHERE Email = '$rEmail'";
     if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
     } else {
     // below msg display on form submit failed
     $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
        }
      }
     }
?>
<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $rName ?>">
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
   
  </form>
</div>


<?php
include('include/footer.php'); 
?>