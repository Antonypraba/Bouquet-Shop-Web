<!doctype html>
<html lang="en">
  <head>
  	<title>cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/crt.css">
  <?php include 'header.php'; ?>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Your Cart</h2>
				</div>
			</div>
      <?php
      $total=0;
      $totalamt=0;

     echo'
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>

						    	<th>Product</th>
                  <th>Quantity</th>
						      <th>Price</th>
						      <th>total</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>';
              if(!empty($_SESSION['cart']))

              {
                 foreach($_SESSION['cart']as $key=>$values)



                { echo'
						  <tbody>
						    <tr class="alert" role="alert">
						      <td>
                  <div class="email">
                    <span>'.$values["pname"].' </span>
                    <span>This bockey was hand made , with fresh and glow flowers Naturaly</span>
                  </div>
                  <td class="quantity">
                   <div class="input-group">
                     <input type="text" name="qty" readonly class="quantity form-control input-number" value='.$values['qty'].'>
                   </div>
                 </td>

						      </td>
						      <td>Rs.'.$values["price"].'</td>
				          <td>'.number_format((int)$values['price']* (int)$values['qty'],2).'</td>
						      <td>
                  <a href="viewcart.php?action=remove&id='.$values['id'].'" >
				            	<button class="btn btn-danger">REMOVE</button>
				          	</button>
				        	</td>';
                $total = $total + (int)$values['qty'] * (int)$values['price'];

                }
                  $totalamt=number_format($total,2);
                      $_SESSION['totalamt'] = $totalamt;


echo'  <tr>
 <td colspan="2"></td>
 <td><b>Total Price</b></td>
<td name="totalamt">'.$totalamt.'</td>
<td>
<a href="viewcart.php?action=clearall">
<button class="btn btn-warning">Clear</button>
</a>
<a href="booking.php?action=">
<button class="btn btn-warning">Buy Now</button>
</a>
</td>
 </tr>
';    }?>
						    </tr>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
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
        if ($_GET['action'] == "buynow") {
          header("location:booking.php");
        }
  } ?>

	<!-- <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/crt.js"></script> -->

	</body>
</html>
