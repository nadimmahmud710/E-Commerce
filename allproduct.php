
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
	
	
	
		
	     <table class="table">
        <thead>
       <tr>
        
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
		<th scope="col">Available product</th>
        <th scope="col">Catagory</th>
      </tr>
      </thead>
	  <?php
          include 'db.php';

          $sql="SELECT * from item";
          $query=mysqli_query($db,$sql);
          while ($temp =mysqli_fetch_array($query)) {
           ?>
     <tr>
      
      <td><?php echo $temp['name']; ?></td>
      <td><?php echo $temp['price']; ?></td>
	  <td><?php echo $temp['quantity']; ?></td>
      <td><?php echo $temp['catagory']; ?></td>
	   <td><a href="edit.php?edit=<?php echo $temp['id'];?>"><button type="button" class="btn btn-warning" >Edit</button></a></td>
	   <td><a href="pro.php?delete=<?php echo $temp['id'];?>"><button type="button" class="btn btn-warning" >Delete</button></a></td>
    
    </tr>

	<?php
	}	  
     ?>
	
	 
	 
	 
	 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
	
</html>












