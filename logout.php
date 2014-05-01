<?php

$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$sql = mysqli_query($con,"DELETE FROM `Logged_In` WHERE 1");

header("Location: index.html");
?>