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

	echo $_POST["rating"];
	$comment = $_POST["comment"];

	echo $comment;
?>