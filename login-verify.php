<!DOCTYPE html>
<html>
	<head>
		<title>Bargain BAGZ</title>
		<!--File Imports-->
		<link rel="stylesheet" href="css/custom.css" />
		<link rel="stylesheet" href="css/bartour.css" />
		<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css"/>
		
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		<script type="text/javascript" src="js/jquery.mobile-1.3.2.js"></script>
		<script type="text/javascript" src="js/jquery.json-2.4.min.js"></script>
		<script type="text/javascript" src="js/jstorage.min.js"></script>
		<script type="text/javascript" src="js/globals.js"></script>
		<!--End of File Imports-->
	</head>
	<body>	
		<div id="page_home" class="page" data-role="page">
			<!--Page Title-->
			<div id="headerFill" class="dynamic_text">
				<h2	class="header_text">Welcome to Bargain BAGZ</h2>
			</div>
			<!--End of Page Title-->
			
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
				        header("Location: bagz-home.php");
				        exit;
					}
					else {
						header("Location: choose-login.html");
						exit;
					}
			    }
			    else {
			    	header("Location: choose-login.html");
			    	exit;
			    }	

			?>
			<!--Menu Options-->
			<div id="nav" class="dynamic_size">
				<h3 class="dynamic_text"></h3>
				<div id="list">
					<ul class="dynamic" data-role="listview" data-inset="true" data-theme="a">
						<li><a href="bagz-home.php" rel="external">Continue On to Site!</a></li>
					</ul>
				</div>
			</div>
			<!--End of Menu Options-->
		</div>
	</body>
</html>