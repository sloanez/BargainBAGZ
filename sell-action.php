<?php
$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$item_name = $_POST["itemname"];
$description = $_POST["description"];
$category = $_POST["category"];
$url = $_POST["url"];
$highest_bid = $_POST["startprice"];
$reserve_price = $_POST["reserveprice"];
$buy_now_price = $_POST["buyitnow"];

// $seller_id = 

$result = mysqli_query($con,"INSERT Into Items (Seller_Id,Item_Name,Description,Category,URL,Reserve_Price,Buy_Now_Price,Highest_Bid,Start_Auction,End_Auction) Values ('$seller_id', '$item_name', '$description', '$category', '$url', '$reserve_price', '$buy_now_price', '$highest_bid', NOW(), NOW() + INTERVAL 2 WEEK)");

echo mysqli_error($con);

mysqli_close($con);
?>