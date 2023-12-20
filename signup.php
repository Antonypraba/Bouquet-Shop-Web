<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>signup</title>

  </head>
    <body>
      <section class="form my-4 mx-5">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-5">
               <img src="images/sign.jpg" class="img-fluid" alt="">
                </div>
                 <div class="log-lg-7 px-5">
                   <h1 class="font-waight-bold py-5" >Sign Up</h1>
                   <form action="php/register.php" method="post" autocomplete="off" >
                     <div class="form-row">
                       <div class="col-lg-7 py-3">
                         <input type="username"  class="form-control" size="60" name="uname" placeholder="Username" value="">
                       </div>
                     </div>

                     <div class="form-row py-3">
                       <div class="col-lg-7">
                         <input type="email"  class="form-control" name="email" placeholder="email" value="">
                       </div>
                     </div>
                     <div class="form-row py-3">
                       <div class="col-lg-7">
                         <input type="password"  class="form-control" name="pwd" placeholder="password" value="">
                       </div>
                     </div>
                     <div class="form-row py-3">
                       <div class="col-lg-7">
                         <input type="cpassword"  class="form-control" name="cpwd" placeholder="confirm-passwors" value="">
                       </div>
                     </div>

                     <div class="form-row">
                       <div class="col-lg-7 py-1">
                        <button type="submit"  class="btn1 mt-3 mb-3">Signup</button>
                        <button type="reset"  class="btn1 mt-1 mb-5">Reset</button>

                       </div>
                     </div>
                     <!-- <a href="#" class="py-10">Forget Password</a> -->
                     <p class="py-10">have an accouont?<a href="login.php">    Login</a></p>

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
