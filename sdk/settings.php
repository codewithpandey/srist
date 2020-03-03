<?php

session_start();

$user = "root";
$password = "password";
$host = "localhost";
$db = "db_name";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
	die('cannot connect:'.mysqli_error());
}

mysqli_select_db($con,$db);

$brand = "Brand Name";

//If user is logged-in

if(isset($_SESSION['pp-user-id'])){
	$email = $_SESSION['pp-user-id'];
	$sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email' LIMIT 1");
	$row = mysqli_fetch_array($sql);
}

?>