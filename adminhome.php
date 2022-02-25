<?php
    session_start();
    include("db.php");
   if(isset($_POST['submit1'])) header('location: insertitem.php');
   if(isset($_POST['submit2'])) header('location: allproduct.php');
   

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ecommerce admin</title>
 </head>
<body>
    <div style="margin-top:100px;"></div>

    <form action="adminhome.php" method="post">
        <div class="container">

            <div style="background-color:yellow"; class="card-deck">
              <div class="card">
                <div style="background-color:#e4e7ed"; class="card-body">
                  <h4 class="text-center">Insert New Product</h4><br>
                 <a href="insertitem.php"><button class="btn btn-outline-info btn-block" name="submit1">Insert</button> <a/>
                </div>
              </div>
              <div  class="card">
                <div style="background-color:#e4e7ed"; class="card-body">
                  <h4 class="text-center">All Product</h4><br>
                  <a><button class="btn btn-outline-info btn-block" name="submit2">Details</button><a/>
                </div>
              </div>
            </div>

            <br><br>

            

        </div>
    </form>
	</body>
	
	</html>