<?php

require_once 'session.php';
if(!isset($_SESSION['cart']))
{
  header('Location: product.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cart</title>
 </head>
<body>
    <div style="margin-top:100px;"></div>


  <div style="weight:100px;">

	     <table  class="table">
         <h5>Cart page<h5><br><br>
        <thead>
       <tr>

        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
		<th scope="col">Available product</th>
		<th scope="col">Total</th>

      </tr>
      </thead>
	  <?php

          $cart = $_SESSION['cart'];
          $sub = 0;
          foreach ($cart as $key => $value) {
           ?>
     <tr>

      <td><?php echo $value['name']; ?></td>
      <td><?php echo $value['price']; ?></td>
	  <td><?php echo $value['qty']; ?></td>
	  <td><?php  echo $value['price'] * $value['qty']; ?></td>
    <?php  $sub += ($value['price'] * $value['qty']); ?>



    </tr>



	<?php



	}





     ?>
     <tr>
       <td colspan="3">SubTotal</td>
       <td><?php echo $sub; ?> Tk</td>
     </tr>
     <tr>
       <td colspan="3"></td>
       <td><a href="product.php"><button  class="btn2" >Continue shopping</button><a/></td>
     </tr>
     <tr>

       <form class="" action="" method="post" enctype="multipart/form-data">
         <td colspan="3"></td>
         <td><a href="order.php"><button  class="btn2"  name="submit">Purchage</button><a/></td>

           </form>

     </tr>

     <?php
       if(isset($_POST['submit']))

          header("refresh:0;url=order.php");


   ?>






</div>






	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
