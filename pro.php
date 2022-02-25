<?php
 include 'db.php';
 if(isset($_GET['delete']))
{
	$id = $_GET['delete'];
	$query ="DELETE FROM item WHERE id = '$id'";
	$result = mysqli_query($db, $query);
	header('Location: allproduct.php');
	echo "hello";
} 


?>