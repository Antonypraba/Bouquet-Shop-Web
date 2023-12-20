</<?php
include "dbcon.php";
if(isset($_GET['deleteid']))
{

  $Email=$_GET['deleteid'];
  $sql="DELETE FROM `regform` WHERE Email='$Email' ";
  $result = mysqli_query($osconn, $sql);
  if($result)
  {
    echo "Deleted successfully";
    header('location:display.php');
  }
  else {
    die(mysqli_error($osconn));
  }
}




 ?>
