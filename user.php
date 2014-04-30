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
			<!--Header Section-->
			<div id="header" data-role="header" data-theme="a">
				<div id="header_logo">
				<script>
					function goBack() {window.history.back ();}
				</script>
					<a href=data-ajax="false" data-prefetch data-role="button" id="homebtn" class="home_button" onclick="goBack()">BACK</a>
				</div>
				<div id="header_home">
				<a href="index.html" data-ajax="false" data-prefetch data-role="button" id="homebtn" class="home_button">HOME</a>
				</div>	
			</div>	
			<!-- End of Header Section -->
			<!--Page Title-->
			<div id="headerFill" class="dynamic_text">
				<h2	class="header_text">User/Company Page</h2>
			</div>
		<!--End of Page Title-->
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
					$result2 = mysqli_query($con,"SELECT * FROM `Users` WHERE User_Id = $userid");
					while($user = mysqli_fetch_array($result2)){
						if ($individual['User_Name']){
							$name = $individual['User_Name'];
						}
						else {
							$name = "Unidentified User";
						}
						// Name of User
						echo "<h1>" . $name;
						if ($user['Num_Sales'] > 100) {
							echo "<img src=\"images/super_seller.png\"></h1>";
							echo " This user is a Super Seller!";
						}
						else {
							echo "</h1>";
						}

						// Reputation
						echo "<br><b>Reputation</b>: " . $user['Reputation'] . " out of 10.";

						$rating = mysqli_query($con,"SELECT * FROM `Ratings` WHERE Being_Rated = $userid");

						if ($rating && mysqli_num_rows($rating) > 0) {
							echo "<h2>Ratings and Comments: </h2><br>";
							while($rate = mysqli_fetch_array($rating)){
								if ($rate['Rating']) {
									echo "<a href=\"user.php?userid=" . $rate['Giving_Rating'] . "\">" . "User " . $rate['Giving_Rating'] . "</a> gave a rating of " . $rate['Rating'];
								}
								if ($rate['Rater_Comment']) {
									echo " and said \"<i>" . $rate['Rater_Comment'] . "\".</i>";
								}
							}
						}


						// Items User is currently selling
						$items = mysqli_query($con,"SELECT * FROM `Items` WHERE Seller_Id = $userid");

						if ($items && mysqli_num_rows($items) > 0) {
							echo "<h2>Current items " . $name . " is auctioning:</h2>";
							echo "<div id=\"nav\" class=\"dynamic_size\">
									<h3 class=\"dynamic_text\"></h3>
									<div id=\"list\">
									<ul class=\"dynamic\" data-role=\"listview\" data-inset=\"true\" data-theme=\"a\">";
							while($eachItem = mysqli_fetch_array($items)){
								echo "<li><a href=\"itemPage.php?itemId=" . $eachItem["Item_No"] . "\" rel=\"external\">" . $eachItem['Item_Name'] . "</a></li>";
							}
							echo "</ul></div></div>";
						}


						// Rate this user button
						echo "<br><br><button type=\"button\">Rate User!</button>"; 

					}

				}
			}
			else {
				echo "<h1>Sorry, this user does not exist</h1>";
			}
		?>
		</div>
	</body>
</html>