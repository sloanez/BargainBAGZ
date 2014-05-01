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
		echo $user;
		$userid = $user['User_Id'];

		$sql = mysql_query("SELECT * FROM `Users` WHERE 'User_Id' = $userid AND Password = '$password'");


		if(mysql_num_rows($sql) == 1) { 
	        echo "LOGGING IN..";
	        //header("Location: index.html"); // Modify to go to the page you would like 
	        //exit; 
	    }else{ 
	    	echo "noo...";
	        //header("Location: login.html"); 
	        //exit; 
    	}
    }
    else {
    	echo "NO";
    } 

?>

</body>
</html>