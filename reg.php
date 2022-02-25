<?php
	
	include("db.php");
	session_start();

	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		

		$query = "SELECT email FROM register WHERE email = '$email'";
		$result = mysqli_query($db, $query);

		if(mysqli_num_rows($result))
		{
		    echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
		    header("refresh:0;");
    	}
		else
		{
			$query = "INSERT INTO register (id, name, password, email, phone, address) VALUES ('', '$name', '$password', '$email', '$phone', '$address')";
			if(mysqli_query($db, $query))
			{
				echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
				header("refresh:0;url=userlogin.php");
			}
			else
			{
				echo "<center><h3><script>alert('Error.. Could Not Register !!');</script></h3></center>";
				header("refresh:0;url=reg.php");
			}
		}
	}
?>







<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hostel management</title>
	<link rel="stylesheet" href="reg.css" />
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<div class="container"><br><br>

  	<h1 class="text-center">Registration Form</h1><br>

  	<form method="post" action="reg.php">
  		<fieldset class="form-group">

  			<div class="form-group">
  				<label class="form-control-label">Name:</label>
  				<input class="form-control" type="text" name="name" placeholder="Write your name" required>
  			</div>
        <div class="form-group">
  				<label class="form-control-label">Password:</label>
  				<input class="form-control" type="password" name="password" placeholder="Enter password" required>
  			</div>

  		</fieldset>

  		<fieldset class="form-group">
  			<legend>Contact Info:</legend>

  			<div class="form-group">
  				<label class="form-control-label">Email:</label>
  				<input class="form-control" type="email" name="email" placeholder="Email" required>
  			</div>
  			<div class="form-group">
  				<label class="form-control-label">Phone Number:</label>
  				<input class="form-control" type="number" name="phone" placeholder="Phone Number" required>
  			</div>
				<div class="form-group">
  				<label class="form-control-label">Address:</label>
  				<textarea class="form-control" rows="5" name="address" required></textarea>
  			</div>
  		</fieldset>

  		
  			
        <br>
        <button class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
  	
  	</form>

	</div>

  <div style="margin-top:200px;"></div>

  
</body>
</html>