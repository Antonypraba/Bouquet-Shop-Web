<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/spin.css">
     <script src="js/script.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<style media="screen">
  .un{
    color: #fff;
    font-size: 40px;

  }
</style>
</head>
<body>

<div class="spin">
    <svg>
      <g>
        <path d="M 50,100 A 1,1 0 0 1 50,0"/>
      </g>
      <g>
        <path d="M 50,75 A 1,1 0 0 0 50,-25"/>
      </g>
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" style="stop-color:#FF56A1;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#FF9350;stop-opacity:1" />
        </linearGradient>
      </defs>
    </svg>
        </div>
<!-- header section starts  -->
<div class="body" hidden="true">


<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Bockey's<span>.</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="product.php">products</a>
        <a href="#review">review</a>
        <a href="contact_form\registration-form.php">contact</a>
        <?php    if(!isset($_SESSION['uname'])){echo ' <a href="login.php" ">please login</a>';}?>
        <?php    if(isset($_SESSION['uname'])){echo ' <a href="order.php" ">My Account</a>';}?>


    </nav>
    <div class="icons">
   <?php  if(!isset($_SESSION['uname'])){echo ' <a href="login.php" class="fa fa-user"></a>';}?>
   <?php if(isset($_SESSION['uname'])) {echo ' <a href="logout.php" class="fa fa-share"></a>';} ?>
        <a href="booking.php" class="fa fa-heart"></a>
        <a href="#viewcart.php" class="fa fa-shopping-cart"></a>
    </div>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
    <div class="content">
        <h1 class="un">
          <?php
          if (isset($_SESSION['uname']))
         {
          echo $_SESSION["uname"];
        }  ?></h1>
        <h3>Brand Bockey's</h3>
        <span> natural & beautiful flowers </span>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae laborum ut minus corrupti dolorum dolore assumenda iste voluptate dolorem pariatur.</p> -->
        <a href="product.php" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/vid.mp4" loop autoplay muted></video>
            <h3>Best Bouquet Sellers</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Flowers convey the feelings of love, romance, and happiness in the best worthy manner. On a particular day, send a bouquet of flowers online with FlowerAura to express myriad emotions to your special one. We have vast collection of flower bouquet in various flower types.</p>
            <p>LOVE is a four letter,a persion want express her feelings,love and affection they need to get available some flowers,no worry's we are hear to provide a fresh and beautiful and expensive model of Bouquet with cheep price. </p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->


<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <!-- <i class="fas fa-star"></i> -->
        </div>
        <p>Such a wonderful shop  i got my best flowers with domw fresh fregrance and i had a good packing with special materials almost buy for worth your money.</p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Such a wonderful shop  i got my best flowers with domw fresh fregrance and i had a good packing with special materials almost buy for worth your money.</p>
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Such a wonderful shop  i got my best flowers with domw fresh fregrance and i had a good packing with special materials almost buy for worth your money.</p>
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>

</section>

review section ends -->

<!-- contact section starts  -->

<!-- <section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img   src="images/contact_img.png" width="80%" height="80%" alt="">
        </div>  </div>

</section>


<!-- icons section starts  -->
<h1 class="heading"> Best of <span>us</span> </h1>
<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>


    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>

</section>

<!-- icons section ends -->
<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>



        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">example@gmail.com</a>
            <a href="#">mumbai, india - 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <a href="datack.php" > <span> 21CS403 </span></a> | all rights reserved </div>

</section>
<!-- footer section ends -->
</div>
</div>
<script>
$(window).on('load',function(){
  setTimeout(function(){
    $(".spin").fadeOut();
  },1000)
  $(".body").slideDown(5000);
});

</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/script.js" charset="utf-8"></script>
</html>
