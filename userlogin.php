<?php
    include("db.php");
  require_once 'session.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT* FROM register WHERE (email = '$email' AND password = '$password')";
        $result = mysqli_query($db, $query);
		$num = mysqli_num_rows($result);

        if( $num == 1 )
        {
            $row = mysqli_fetch_array($result);
            if($row['email'] == $email && $row['password'] == $password)
            {
                $_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['name'];
                header('location: product.php');
            }
            else
            {
                echo "<center><h3><script>alert('login error');</script></h3></center>";
                header("refresh:0;");
            }
        }
        else
        {
            echo "<center><h3><script>alert('You are not able to login');</script></h3></center>";
            header("refresh:0;");
        }
    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel management</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div style="margin-bottom:100px;"></div>

	<div class="container">
        <div class="card mx-auto" style="width: 50%">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <h5>User Login<h5>

                </ul>
            </div>

            <div class="card-body">
                <br>
                <form method="post" action="userlogin.php">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input class="form-control" type="text" name="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <br>
                    <button class="btn btn-primary btn-block" name="submit">Login</button>
                </form>
                <br>
            </div>
        </div>
        <br><br>
    </div>
	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
