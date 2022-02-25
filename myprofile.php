
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
        <button class="btn btn-primary btn-sm" name=""><a style="color:white; class="nav-link" href="product.php"> Home </a></button>
        <button class="btn btn-primary btn-sm" name="">  <a style="color:white; class="nav-link" href="profile.php">My Order </a></button>
              </li>




           </ul>
        </div>
     </nav>

	<div>
    <h5> MY Profile</h5>
    <table  class="table">
     <thead>
    <tr>

     <th scope="col">Name</th>
     <th scope="col">email</th>
    <th scope="col">Phone</th>
    <th scope="col">Address</th>

    </tr>
    </thead>
    <?php
    include("db.php");
    require_once 'session.php';
      $u_id=$_SESSION['id'];

          $sql="SELECT* FROM register WHERE id='$u_id'";
          $query= mysqli_query($db,$sql);
          while ($temp=mysqli_fetch_array($query)) {

           ?>

    <tr>

     <td><?php echo $temp['name']; ?></td>
     <td><?php echo $temp['email']; ?></td>
   <td><?php echo $temp['phone']; ?></td>
   <td><?php echo $temp['address']; ?></td>



<td><button class="btn btn-primary btn-sm" name="">Edit profile</button></td>
   </tr>

   <?php

   }

  ?>


  </div>





</body>
</html>
