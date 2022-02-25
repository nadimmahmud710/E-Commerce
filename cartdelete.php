<?php
 include 'db.php';
 if(isset($_GET['delete']))
{
	$id = $_GET['delete'];
	$query ="DELETE FROM cart WHERE id = '$id'";
	$result = mysqli_query($db, $query);
	header('Location: cart.php');
	echo "hello";
}


?>
