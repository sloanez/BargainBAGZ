<?php
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	echo "<h1> Rate User </h1>";

	if (isset($_POST['submit'])) {
		$rating = $_POST['rating'];
		$comment = $_POST['comment'];
		$submit = $_POST['submit'];

		if(isset($submit) && !empty($rating) && !empty($comment)) {
			// Do some query shit
		}
		else {
			echo "Please fill in all fields."
		}
	}
	
?>