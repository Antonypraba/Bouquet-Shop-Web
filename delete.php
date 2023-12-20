<?php

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

include_once 'php/connect.php';
$sql = "DELETE FROM booking WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Your Booking has deleted')</script>";
    header('location:product.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($con);



 ?>
