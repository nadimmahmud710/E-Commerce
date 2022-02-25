<?php

require_once "session.php";
include("db.php");
$p_id = $_POST['p_id'];
$query = "SELECT * FROM item where id='$p_id'";
$result = mysqli_query($db, $query);
$product = mysqli_fetch_array($result);
// print_r($product);
if(isset($_SESSION['cart'])){
  $cart = $_SESSION['cart'];
  $cart[$p_id] = [
    'name' => $product['name'],
    'qty' => $_POST['quantity'],
    'price' => $product['price'],

  ];
  $_SESSION['cart'] = $cart;

}else{
  $cart = [
    $p_id => [
      'name' => $product['name'],
      'price' => $product['price'],
      'qty' => $_POST['quantity']
    ]
  ];
  $_SESSION['cart'] = $cart;
  echo $p_id;

}

header('Location: place_order.php');
// echo $_POST['quantity'];
// die("ok");
 //
	// 	   $id= $_GET['cart_id'];
	// 	   $name= $_GET['cart_name'];
 //
	// 	   $price= $_GET['cart_price'];
 //
	// 	   $quantity = 19;
	// 	   $tprice =  $quantity*$price;
 //
	// 	$query = "INSERT INTO cart(id,name,price,quantity,tprice) values('$id','$name','$price','$quantity', '$tprice')";
	// 	$result = mysqli_query($db, $query);
	// 	header("url=product.php");



?>
