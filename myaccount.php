<?php
session_start();
error_reporting(0);
include ('php/connect.php');
if(!isset($_SESSION['uname']))
    {
header('location:login.php');
}
else{
	if(isset($_POST['update']))
	{
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
		$query=mysqli_query("UPDATE register set email='$email',pwd='$pwd',cpwd='$cpwd'  WHERE id='".$_SESSION['id']."'");
		if($query)
		{
echo "<script>alert('Your info has been updated');</script>";
}

	}
}
?>



 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="css/login.css">
     <title>My Account</title>

   </head>
   <body>

       <section class="form my-4 mx-5">
         <div class="container">
           <div class="row no-gutters">

                  <div class="log-lg-7 px-5">
                    <h1 class="font-waight-bold py-5" >My Account</h1>



                    <form role="form" method="post">
                      <div class="form-row">
                        <div class="col-lg-7 py-1">
                          <label class="info-title" for="name">Username<span></span></label>
                          <input type="text"  class="form-control" size="60" name="uname" placeholder="Username" value="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-lg-7 py-1">
                          <label class="info-title" for="name">email<span></span></label>
                          <input type="email"  class="form-control" size="60" name="email"  value="<?php echo $row['email']; ?>  ">
                        </div>
                      </div>


                      <div class="form-row">
                        <div class="col-lg-7 py-1">
                          <label class="info-title" for="name">Password<span></span></label>
                          <input type="password"  class="form-control" placeholder="Password" name="pwd" value="">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-7 py-1">
                          <label class="info-title" for="name">Confirm password<span></span></label>
                          <input type="password"  class="form-control" placeholder="CPassword" name="cpwd" value="">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-lg-7 py-1">
                         <button type="update" name="update" class="btn1 mt-3 mb-3">Update</button>
                           <button type="reset"  class="btn1 mt-1 mb-5">Reset</button>
                        </div>
                      </div>
                      <!-- <a href="#" class="py-10">Forget Password</a> -->
                      <p class="py-10">After change click here.!<a href="login.php"> Login</a></p>
                    </form>

                  </div>
           </div>
         </div>
       </section>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   </body>
 </html>
