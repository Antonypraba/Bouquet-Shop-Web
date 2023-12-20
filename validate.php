<?php
SESSION_start();
include 'php/connect.php';
if (isset($_POST['submit'])) {
  $uname = $_POST['uname'];
  $pwd = $_POST['pwd'];
  $rem=$_POST['remember'];
  date_default_timezone_set('Asia/Kolkata');
  $login_date = date("Y-m-d");
  $login_time = date("h:i:sa");
  $sql = "SELECT * From register Where uname = '$uname' and pwd = '$pwd'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);
  $count =  mysqli_num_rows($result);

  if ($count == 1){
    $_SESSION["uname"]=$uname;
    $id=session_id();
    $sql="INSERT INTO `sessiontracking`(`sessionID`,`uname`, `login_date`, `login_time`, `logout_date`, `logout_time`) VALUES ('$id','$uname','$login_date','$login_time','','')";
$result = mysqli_query($con,$sql);
    if (isset($rem)) {
      setcookie("uname","$uname",time()+3600);
      setcookie("pwd","$pwd",time()+3600);
    header("location:index.php");
    }
  }
  else {
    header("location:http://localhost/my%20project/loginfail.php");
  }
}
 ?>
