<?php
session_start();
error_reporting(0);
include('php/connect.php');
if(!isset($_SESSION['uname']))
    {
header('location:login.php');

	if(isset($_POST['update']))
	{
		$uname=$_POST['uname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
		$zipcode=$_POST['zipcode'];

    $hostname="localhost"; //local server name default localhost
    $username="root";  //mysql username default is root.
    $password="";       //blank if no password is set for mysql.
    $database="miniproject";  //database name
    $con = new mysqli($hostname,$username,$password,"$database");
		$query=mysqli_query($con,"update booking set uname='$uname',email='$email',address='$address',city='$city',state='$state',zipcode='$zipcode' where id='".$_SESSION['id']."'");
		if($query)
		{
    echo "<script>alert('Your info has been updated');</script>";
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<style media="screen">
  *{
    padding:0;
    margin:0;

    box-sizing: border-box;
  }
  .row{
    padding:10%;
    margin-top: auto;
    background: #FADBD8;
    border-radius: 30px;
    margin-left: 50px;
    margin-right: 50px;
    box-shadow: 0px 12px 22px #566573;
  }
  h1{
     text-align:center;
     font-weight: bold;
  }
</style>
  </head>
  <body>
    <div class="card">
      <h1 class="display-6 text-center" >You'r Order Details</h1>
    </div>
    <?php
    $query=mysqli_query($con,"SELECT * from booking  where uname='".$_SESSION['uname']."'");
    while($row=mysqli_fetch_array($query))
    {
    ?>
    <form class="row g-5">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Usernamename</label>
        <input type="text" class="form-control" value="<?php echo $row['uname'];?>"   id="inputEmail4">
      </div>
      <div class="col-md-6 ">
        <label for="inputPassword4" class="form-label">E-mail</label>
        <input type="email" class="form-control" value="<?php echo $row['email'];?>" id="inputPassword4">
      </div>
      <div class="col-8">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" value="<?php echo $row['address'];?>" id="inputAddress" >
      </div>
        <div class="col-md-4">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" value="<?php echo $row['city'];?>" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
          <input type="text" class="form-control" value="<?php echo $row['state'];?>" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control"  value="<?php echo $row['zipcode'];?>" id="inputZip">
      </div>

      <div class="col-12">
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <!-- <button type="#" class="btn btn-danger">Delete</button> -->
      </div>
    </form>
<?php } ?>

  </body>
</html>
