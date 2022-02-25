<?php
$servername = "localhost";
$username = "root";
$password = "";


$db = mysqli_connect($servername, $username, $password , 'ecomarce');


if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>