<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/product.css">
   <link rel="stylesheet" href="css/style.css">

   <!-- custom js file link  -->
   <script src="js/scriptpr.js" defer></script>

</head>
<body>
  <div class="body">


  <header>
      <input type="checkbox" name="" id="toggler">
      <label for="toggler" class="fas fa-bars"></label>

      <a href="#" class="logo">Bockey's<span>.</span></a>

      <nav class="navbar">
          <a href="index.php">home</a>
          <a href="#about">about</a>
          <a href="product.php">products</a>
          <a href="http://localhost/my%20project/index.php#review">review</a>
          <a href="#contact">contact</a>
      </nav>

      <div class="icons">
        <?php   if(!isset($_SESSION['uname'])){echo ' <a href="login.php" class="fa fa-user"></a>';}?>
        <?php if(isset($_SESSION['uname'])) {echo ' <a href="logout.php" class="fa fa-share"></a>';} ?>
          <a href="#" class="fas fa-heart"></a>
          <a href="viewcart.php" class="fas fa-shopping-cart"></a>
      </div>
  </header>
