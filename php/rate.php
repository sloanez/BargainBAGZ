<?php
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	if (count($_GET) > 0) {
		$userid = $_GET["userid"];
	}
	else {
		$userid = -1;
	}

	$result = mysqli_query($con,"SELECT * FROM `Individuals` WHERE User_Id = $userid");

	if (mysqli_num_rows($result) == 0) {
		$result = mysqli_query($con,"SELECT * FROM `Companies` WHERE User_Id = $userid");
	}



	if ($result && mysqli_num_rows($result) > 0) {
		while($individual = mysqli_fetch_array($result)) {
			
		}
	}
	else {
		echo "<h1>Sorry, this user does not exist</h1>";
	}
?>