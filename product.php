


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body style="margin-bottom: 100px;">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">

        <div class="collapse navbar-collapse" id = "navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                      <button class="btn btn-primary btn-sm" name=""><a style="color:white; class="nav-link" href="product.php"> Home </a></button>
                </li>




			    <form style="float: right;" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder ="Search Product " aria-label="Search">
                <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>




             </ul>
          </div>
		   </nav>



		<?php
          include 'db.php';
          require_once "session.php";

           // session_unset();

          $sql="SELECT * from item";
          $query=mysqli_query($db,$sql);

          while ($temp =mysqli_fetch_array($query)) {
            // print_r($temp);
           ?>






    <div class="container">



        <!-- card -->

        <div  style="margin-top: 10px;width: 18rem; height: 25rem; float: left" class="card">

            <div class="card-header"><?php echo $temp['name']; ?></div>
            <img src=" img/<?php echo $temp['image']; ?>" class="card-img-top" alt="image" />
            <div class="card-body">
                <h5 class="card-title">Price: <?php echo $temp['price']; ?></h5>
                <p class="card-text"><?php echo $temp['details']; ?></p>

				 <form method="POST" action="cart.php">
				<div class="form-group">
  				<label class="form-control-label">quantity:</label>
  				<input class="form-control" type="number" id= "quantity" name="quantity" placeholder="quantity" required>
          <input type="text" name="p_id" value="<?php echo $temp['id'] ?>" hidden>


               <button type="submit" >Add To Cart</button></a>
				  </div>
				  </form>
            </div>
        </div>


       </div>

      <?php

		  }

     ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
