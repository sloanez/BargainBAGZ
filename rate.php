<html>
<body>
<?php
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$rating = $_POST['rating'];
	$comment = mysql_real_escape_string($_POST['comment']);
	$beingRated = $_GET['userid'];

	$rater = mysqli_query($con,"SELECT * FROM Logged_In LIMIT 1");

	if($rater) {
		$rater2 = mysqli_fetch_array($rater);

		$rater_id = $rater2['User_Id'];

		$result = mysqli_query($con,"INSERT Into Ratings (Being_Rated, Giving_Rating, Rating, Rater_Comment) Values ('$beingRated', '$rater_id', '$rating', '$comment')");
		echo mysqli_error($con);

		$sumRate = mysqli_query($con, "SELECT SUM(Rating) as Rep FROM Ratings WHERE Being_Rated = '$beingRated'");
		$numRate = mysqli_query($con, "SELECT COUNT(*) as num FROM Ratings WHERE Being_Rated = '$beingRated'");
		$num = mysqli_fetch_array($numRate);
		$numDiv = $num['num'];

		$total = mysqli_fetch_array($sumRate);
		
		$totalNum = $total['Rep'];

		$avg = $totalNum / $numDiv;


		$individual = mysqli_query($con, "UPDATE Users SET Reputation = '$avg' WHERE User_Id = '$beingRated'");
	}	

	header("Location: bagz-home.php")
?>
</body>
</html>