<?php
include "php/connect.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>view bockey</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="css/view.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
<?php include "header.php";

if (isset($_GET['action']))
 {
    if ($_GET['action'] == "buynow")
    {
      header('location:booking.php');
    }
  }
?>
<style media="screen">
  .form-control{
    padding: 20px;
    font-size: 15px;
  }
</style>
  </head>

  <body>
        <?php

        if (isset($_POST['addcart']))
         {
          if (isset($_SESSION['cart']))
          {
            $id_array=array_column($_SESSION['cart'],"id");
            if(!in_array($_GET["id"],$id_array))
            {
             $index=count($_SESSION['cart']);
             $item=array(
               'id'=> $_GET['id'],
               'pname'=> $_POST['pname'],
               'price'=> $_POST['price'],
               'qty'=> $_POST['qty'],
               'pimg'=> $_POST['pimg'],


             );
             $_SESSION['cart'][$index]=$item;
             echo "<script>alert('product added');</script>";
             header("location:viewcart.php");
            }else {
              echo "<script>alert('already added');</script>";
            }

          }else{
            $item=array(
              'id'=> $_GET['id'],
              'pname'=> $_POST['pname'],
              'price'=> $_POST['price'],
              'qty'=> $_POST['qty'],
              'pimg'=> $_POST['pimg'],

            );
            $_SESSION['cart'][0]=$item;
            echo "<script>alert('product added');</script>";
            header("location:viewcart.php");
        }
        }
        if (isset($_GET["id"]))
         {
        $sql="select * from category where id={$_GET["id"]}";
        $res=$con->query($sql);
         if ($res->num_rows>0)
         {
             $row=$res->fetch_assoc();
echo'
<form action'.$_SERVER['REQUEST_URI'].' method="post">
<main class="container">
<div class="left-column">
<img class="active" width="80%" src="images/'.$row['pimg'].'">
</div>
<div class="right-column">
<div class="product-description">
  <span>Brand Bouquet</span>
  <h1>'.$row['pname'].'</h1>
  <p>This bockey was hand made , with fresh and glow flowers Naturaly</p>
</div>
  <h1>Enter Quty :</h1>
  <div class="form-row">
    <div class="col-lg-5 py-8">
      <input type="int" required  class="form-control" size="100" name="qty" placeholder="qty" value="">
 <input type="hidden" value='.$row['pname'].' name="pname">
  <input type="hidden" value='.$row['price'].' name="price">
  </div>
  </div>
  <div class="product-price">
    <span>Rs.'.$row['price'].'</span>

    </a>
    <button type="submit" name="addcart"  class="cart-btnn">Add to cart</button>
</div>

</div>

  </main>
</form>
'; }
 else {
          header("location:product.php");
        }
      }
       ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  </body>
</html>
