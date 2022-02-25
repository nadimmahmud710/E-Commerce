<?php

 include("db.php");
	session_start();

	if(isset($_POST['submit']))
	{
		$target = "item/".basename ($_FILES['image']['name']);
		$image= $_FILES['image']['name'];
		$name = $_POST['product_name'];
		$price = $_POST['product_price'];
		$quantity = $_POST['quantity'];
		$catagory = $_POST['catagory'];
		$details = $_POST['product_details'];
		
		

		$query = "INSERT INTO item(id,name,price,quantity,catagory,details,image) values('','$name','$price','$quantity','$catagory','$details','$image')";
		$result = mysqli_query($db, $query);
          header("refresh:0;url=adminhome.php");		


	}


  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Product</title>
   
      <link rel="stylesheet" href="insert.css" />
  </head>
  <body>
    <div class="div1">
      <form class="" action="insertitem.php" method="post" enctype="multipart/form-data">
        <label for="">Insert Product Name</label><br>
        <input id="product_name" type="text" name="product_name" value="" placeholder="Insert Product Name" required>
        <br><br>
        <label for="">Insert Product Price</label><br>
        <input id="product_price" type="text" name="product_price" value="" placeholder="Insert Product Price" required><br><br>
		 <label for="">Insert Product quantity </label><br>
        <input id="product_price" type="text" name="quantity" value="" placeholder="Insert Product Price" required><br><br>
		<label for="">Catagory</label><br>
        <input id="product_name" type="text" name="catagory" value="" placeholder="Insert Product Name" required><br><br>
        <label for="">Insert Product Details</label><br>
        <textarea id="product_details" name="product_details" rows="20" cols="80" placeholder="Insert Product Deatils" required>
        </textarea><br><br>
        <label for="">Insert Product Image</label><br>
        <input id="product_image" type="file" name="image" value="" required><br><br>
        <button class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>

      </form>
     

    </div>

  </body>
</html>