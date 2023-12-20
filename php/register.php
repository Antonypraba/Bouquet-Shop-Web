<?php
SESSION_START();


$uname = $_POST['uname'];
$email  = $_POST['email'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
// SESSION["uname"] = $uname

if (!empty($uname) || !empty($email) || !empty($pwd) || !empty($cpwd) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "miniproject";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (uname , email ,pwd, cpwd )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

      if ($rnum==0 && $pwd == $cpwd) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $uname,$email,$pwd,$cpwd);
      $stmt->execute();
      header("location:http://localhost/my%20project/signupdone.php");
     } else {
      header("location:http://localhost/my%20project/signupfail.php");
     }
     $stmt->close();
     $conn->close();
    }
} else
{
 echo "All field are required";
 die();
}
?>
