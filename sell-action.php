<html>
<body>
<?php
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	

	$item_name = mysql_real_escape_string($_POST["itemname"]);
	$description = mysql_real_escape_string($_POST["description"]);
	$category = $_POST["category"];
	$url = mysql_real_escape_string($_POST["url"]);
	$highest_bid = $_POST["startprice"];
	$reserve_price = $_POST["reserveprice"];
	$buy_now_price = $_POST["buyitnow"];

	$sell = mysqli_query($con,"SELECT * FROM Logged_In LIMIT 1");
	echo mysqli_error($con);

	if($sell) {
		$seller = mysqli_fetch_array($sell);

		$seller_id = $seller['User_Id'];

		$result = mysqli_query($con,"INSERT Into Items (Seller_Id,Item_Name,Description,Category,URL,Reserve_Price,Buy_Now_Price,Highest_Bid,Start_Auction,End_Auction) Values ('$seller_id', '$item_name', '$description', '$category', '$url', '$reserve_price', '$buy_now_price', '$highest_bid', NOW(), NOW() + INTERVAL 2 WEEK)");
		echo mysqli_error($con);
	}	

	header("Location: bagz-home.php");

	mysqli_close($con);
	
?>
</body>
</html>