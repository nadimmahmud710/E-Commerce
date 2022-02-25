



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">

      <div class="collapse navbar-collapse" id = "navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <button class="btn btn-primary btn-sm" name=""><a style="color:white; class="nav-link" href="adminhome.php"> Admin Home </a></button>
              </li>




           </ul>
        </div>
     </nav>

	<div>
    <h5>My orders</h5><br><br>
    <table  class="table">
     <thead>
    <tr>

     <th scope="col">Product Name</th>
     <th scope="col">Price</th>
    <th scope="col">Quantity</th>
    <th scope="col">Total</th>
		<th scope="col">Date</th>
		<th scope="col">Status</th>

    </tr>
    </thead>
    <?php
    include("db.php");
    require_once 'session.php';
		


          $sql="SELECT* FROM myorder  ";
          $query= mysqli_query($db,$sql);
          while ($temp=mysqli_fetch_array($query)) {

           ?>

    <tr>

     <td><?php echo $temp['name']; ?></td>
     <td><?php echo $temp['price']; ?></td>
   <td><?php echo $temp['quantity']; ?></td>
   <td><?php echo $temp['amount']; ?></td>
	  <td><?php echo $temp['date']; ?></td>
		 <td><?php echo $temp['status']; ?></td>







   </tr>

   <?php

   }


  ?>
  <tr>
    <td colspan="3"></td>

  </tr>

  </div>




</body>
</html>
