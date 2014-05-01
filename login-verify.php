<html>
<body>
<?php
	
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$email = $_POST["email"]; 
	$password = $_POST["password"]; 
	$isCompany = $_GET["company"];

	if ($isCompany == 0) {
		$sql1 = mysqli_query($con,"SELECT User_Id FROM `Individuals` WHERE Email='$email'");
	}
	else {
		$sql1 = mysqli_query($con,"SELECT User_Id FROM `Companies` WHERE POC_Email='$email'");
	}

	if($sql1) {
		$user = mysqli_fetch_array($sql1);
		$userid = $user['User_Id'];

		$sql = mysqli_query($con,"SELECT * FROM `Users` WHERE User_Id = '$userid' AND Password = '$password'");

		if(mysqli_num_rows($sql) == 1) { 
	        // Credentials checked, log in...

	        $add = mysqli_query($con, "INSERT Into Logged_In (User_Id) Values ('$userid')");
	        //echo mysqli_error($con);

	        header("Location: bagz-home.php");
	        
	        exit; 
		}
		else {
			echo "Invalid Username or Password";
		}
    }
    else {
    	echo "Invalid Username or Password";
    }	

?>

</body>
</html>