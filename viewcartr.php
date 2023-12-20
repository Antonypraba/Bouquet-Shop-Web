
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- custom css file link  -->
<style media="screen">
  .title{
    text-align: center;
    font-size: 45px;
  }
</style>
    <?php include 'header.php'; ?>
  </head>
  <body>
     <h1 class="title"> Your Cart </h1>
       <?php
       $total=0;
      echo"  <table class='table table-bordeded table-striped'>
        <tr>
        <th>NAME</th>
        <th>PRICE</th>
        <th>QTY</th>
        <th>TOTAL</th>
        <th>REMOVE</th>
        <th>&nbsp;</th>
            </tr>";
            if(!empty($_SESSION['cart']))
            {
               foreach($_SESSION['cart']as $key=>$values)
              {

echo"   <tr>
        <td>".$values['pname']."</td>
        <td>".$values['price']."</td>
        <td>".$values['qty']."</td>
        <td>".number_format((int)$values['price']* (int)$values['qty'],2)."</td>
           <td>
           <a href='viewcart.php?action=remove&id=".$values['id']."' >
           <button class='btn btn-danger'>Remove</button></a>
           </td><tr>
        ";
           $total = $total + (int)$values['qty'] * (int)$values['price'];
      }
        echo "
         <tr>
         <td colspan='2'></td>
         <td><b>Total Price</b></td>
        <td>".number_format($total,2)."</td>
        <td>
        <a href='viewcart.php?action=clearall'>
        <button class='btn btn-warning'>Clear</button>
        </a>
        </td>
         </tr>
      ";}
           ?>
</table>
    </div>
     </div>
<?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "clearall") {
      unset($_SESSION['cart']);
    }
      if($_GET['action'] == "remove")
      {
        foreach ($_SESSION['cart'] as $key => $values)
         {
          if ($values['id']==$_GET['id'])
           {
            unset($_SESSION['cart'][$key]);
          }
        }
      }
} ?>
  </body>
</html>
