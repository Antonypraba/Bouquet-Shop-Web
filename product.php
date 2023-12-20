<?php
include ("php/connect.php");
 ?>


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
<?php include "header.php"; ?>
</head>
<body>
  <div class="body">
<div class="container">
   <h3 class="title"> NEW FLOWRS </h3>
   <div>
   <div class="products-container">
<?php $sql="select * from category";
      $res=$con->query($sql);
      if ($res->num_rows>0) {
     while ($row=$res->fetch_assoc())
      {
       echo '

      <div class="product" >
         <img width="100%" src="images/'.$row['pimg'].'" alt="">
         <h3>'.$row['pname'].'</h3>
         <div class="price">'.$row['price'].'</div>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>( 250 )</span>
         </div>
         <p>Lorem</p>
         <div class="buttons">
            <a href="view.php?id='.$row['id'].' " class="buy">buy now</a>
            <a href="#" class="cart">add to cart</a>
         </div>
      </div>


  ';  }
     } ?>
   </div>
</div>

</div>

</body>
</html>
