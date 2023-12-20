<?php
session_start();
error_reporting(0);
include('php/connect.php');
if(!isset($_SESSION['uname']))
    {
header('location:login.php');
}else {

	if(isset($_POST['update']))
{
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
		$zipcode=$_POST['zipcode'];

		$query=mysqli_query($con,"update booking set phone='$phone',address='$address',city='$city',state='$state',zipcode='$zipcode' where uname='".$_SESSION['uname']."'");
		if($query)
		{
    echo "<script>alert('Your info has been updated');</script>";
  }
}

// elseif(isset($_POST['delete']))
// {
//   $delid=$_SESSION['uname'];
//   echo "$delid";
//   $query= "DELETE FROM `booking` WHERE uname='$delid'";
//   $res=mysqli_query($con,$query);
//   if($res)
//     {
//     echo "<script>alert('Your info has been Deleted');</script>";
//     header('location:index.php');
//   }
// }
// else {
//   // code...
// }

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booked details</title>
    <link rel="stylesheet" href="css/order.css"/>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style media="screen">
      .pname{
        color:#BB8FCE;
      }

    </style>

  </head>
  <body>


    <div class="container">
      <div class="form">
        <div class="contact-info">

          <h3 class="title">Your Booking Details </h3>

          <?php
          $query=mysqli_query($con,"SELECT * FROM booking where uname='".$_SESSION['uname']."'");
          while($row=mysqli_fetch_array($query))
          {

          ?>
          <h4 class="title">Product name:<h2 class="pname"><?php echo $row['pname'];?></h2></h4>


          <p class="text">

            <h1><?php echo $row['uname'];?></h1>
            <h1  class="title">Username</h1 >
          </p>

          <div class="info">
            <div class="information">
              <img src="images/location.png" class="icon" alt="" />
              <p>"<?php echo $row['address'];?></p>
            </div>
            <div class="information">
              <img src="images/email.png" class="icon" alt="" />
              <p><?php echo $row['email'];?></p>
            </div>
            <div class="information">
              <img src="images/phone.png" class="icon" alt="" />
              <p><?php echo $row['phone'];?></p>
            </div>
            <div class="information">
              <img src="images/state.png" class="icon" alt="" />
              <p><?php echo $row['state'];?></p>
            </div>
            <div class="information">
              <img src="images/cityy.png" class="icon" alt="" />
              <p><?php echo $row['city'];?></p>
            </div>
            <div class="information">
              <img src="images/zipp.png" class="icon" alt="" />
              <p><?php echo $row['zipcode'];?></p>
            </div>
            <a href="delete.php?">
            <!-- <button class="btnn">Delete</button> -->
            <a class="btnn" href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
            </a>

          </div>



          <!-- <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>

            </div> -->
          <!-- </div> -->
        </div>


        <div class="contact-form">


          <form action="" autocomplete="off" method="post">
            <h3 class="title">Edit my order</h3>
            <!-- <div class="input-container">
             <input type="text" name="uname" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div> -->
            <div class="input-container">
               <input type="tel" name="phone" required class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container">
              <input type="text" name="state"  required class="input" />
              <label for="">state</label>
              <span>state</span>
            </div>
            <div class="input-container">
              <input type="text" name="city"  required class="input" />
              <label for="">city</label>
              <span>city</span>
            </div>
            <div class="input-container">
              <input type="text" name="zipcode"  required class="input" />
              <label for="">zipcode</label>
              <span>zipcode</span>
            </div>
            <div class="input-container textarea">
              <textarea name="address"  required class="input"></textarea>
              <label for="">Address</label>
              <span>Address</span>
            </div>
            <!-- <a class="btn"  name="update" href="update.php?id=<?php echo $row["id"]; ?>">Update</a> -->
              <!-- <a class="btnn"  type="submit" href="update.php?id=<?php echo $row["id"]; ?>">Update</a> -->
             <button class="btn" type="submit"  name="update" >UPDATE</button>
            <a href="index.php" class="btn" >home</a>

          </form>
<?php } ?>
        </div>
      </div>

    </div>

    <script src="js/app.js"></script>
  </body>
</html>
