<?php
include_once 'php/connect.php';
session_start();
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="miniproject";  //database name
$con=new mysqli($hostname,$username,$password,"miniproject");
// include "php/connect.php";
// if(isset($_GET['delete']))
// {
//   $sql="delete from booking where uname=".$uname." ";
//   $result = mysqli_query($con, $sql);
//   if($result)
//   {
//     echo "Deleted successfully";
//     header('location:index.php');
//   }
//   else {
//     die(mysqli_error($con));
//   }
// }

if(isset($_GET['update']))

{
echo "string";
$phone=$_POST['phone'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
echo "before update";
$sql=mysqli_query($con,"update booking set phone='$phone',address='$address',city='$city',state='$state',zipcode='$zipcode' where id=".$_SESSION['id']."");
// $sql = "DELETE FROM booking WHERE id='" . $_GET["id"] . "'";
echo "after update";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Your Booking has Updated')</script>";
    header('location:order.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($con);
}
 ?>
