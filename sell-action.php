<?php
$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$email = $_POST["email"];
$password = $_POST["password"];
$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$addr = $_POST["addr_1"]." ".$_POST["addr_2"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$state = $_POST["state"];


$result = mysqli_query($con,"INSERT Into Users (Email,Password,Phone_Num) Values ('$email', '$password', '$phone')");

echo mysqli_error($con);

mysqli_close($con);
?>