<?php

          include 'db.php';

         if(isset($_POST['submit']))
	{

		$id = $_GET['edit'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];



		$query = "UPDATE register SET name='$name',phone='$phone', address= '$address' WHERE id = '$id'";
		$result = mysqli_query($db, $query);
          header("refresh:0;url=myprofile.php");

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
      <form class="" action="" method="post" enctype="multipart/form-data">
        <label for="">name</label><br>
        <input id="product_name" type="text" name="name" value="" placeholder="Insert  Name" required>
        <br><br>
		<label for="">Phone</label><br>
        <input id="" type="text" name="phone" value="" placeholder="Insert phone number" required><br><br>
        <label for="">Insert address</label><br>

        <textarea id="" name="address" rows="20" cols="80" placeholder="address" required>
        </textarea><br><br>

        <button class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>

      </form>


    </div>

  </body>
</html>
