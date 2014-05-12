<html>
<body>
<?php 
// bidder id = person who bought it
// highest bid = buy it now price
// end auction time = now
// order history table
// order date = end auction date
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	
	$bid_id = mysqli_query($con,"SELECT * FROM Logged_In LIMIT 1");
	
?>
</body>
</html>x