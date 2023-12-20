<?php

require  'php/connect.php';
include "header.php";
if(!isset($_SESSION['uname']))
    {
header('location:login.php');
}
if(isset($_POST['submit']))
	{
    $pname=$_POST['pname'];
		$uname=$_POST['uname'];
    $email=$_POST['email'];
		$phone=$_POST['phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipcode=$_POST['zipcode'];

  $hostname="localhost"; //local server name default localhost
  $username="root";  //mysql username default is root.
  $password="";       //blank if no password is set for mysql.
  $database="miniproject";  //database name
  $con=new mysqli($hostname,$username,$password,"$database");
		$query=mysqli_query($con,"insert into booking (pname,uname,email,phone,address,city,state,zipcode)  values('$pname','$uname','$email','$phone','$address','$city','$state','$zipcode')");
    if($query){
  header("location:http://localhost/my%20project/bookingdone.php");}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css\booking.css">
    <style media="screen">
      .form-label{
        color:red;
      }
    </style>

</head>
<body>

<div class="container">
<img src="image/02.jpg" alt="">
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
              <?php    if(!empty($_SESSION['cart']))
              $total=0;
              $totalamt;
              $values;
                {
                   foreach($_SESSION['cart']as $key=>$values)
                        $pname=$values["pname"];
                        $price=$values["price"];
                        $qty=$values["qty"];
                        $totalamt = $_SESSION['totalamt'];
                        $total = $total + (int)$values['qty'] * (int)$values['price'];
                         // $totalamt=$values["totalamt"];
                           // $totalamt=number_format($total,2);

                  { echo'
                <div class="inputBox">';}?>
                    <span>Product Name :</span> <input class="form-label" name="pname" for="form12"  readonly value="<?php echo''.$pname.'';}?>">
                </div>
                <div class="inputBox">
                    <span>Username :</span>
                    <input type="text" name="uname" required placeholder="same as login">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email"  name="email" required placeholder="same as register">
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="phone"  name="phone"  required >
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address"  required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zipcode" required>
                    </div>
                </div>

            </div>

            <div class="col">
                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Rs:<?php echo''.$totalamt.'';?></span>
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" required>
                    </div>
                </div>

            </div>

        </div>

        <button type="submit" name="submit"  class="submit-btn">proceed to checkout</button>

    </form>


</div>

</body>
</html>
