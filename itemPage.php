<html>
<head>
<title>State College Bar Tour</title>
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
					<a href="index.html" data-ajax="false" data-prefetch data-role="button" id="homebtn" class="home_button">BACK</a>
				</div>
				<div id="header_home">
				<a href="index.html" data-ajax="false" data-prefetch data-role="button" id="homebtn" class="home_button">Home</a>
				</div>	
			</div>	
			<!-- End of Header Section -->
			<!--Page Title-->
			<div id="headerFill" class="dynamic_text">
				<h2	class="header_text">Item Listing</h2>
			</div>
		<!--End of Page Title-->
		<!-- Start Item Listing-->
		<?php
			$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$itemId = $_GET["itemId"];

			$result = mysqli_query($con,"SELECT * FROM `Items` WHERE Item_No = $itemId");

			if ($result && mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)){
					echo "<h1>" . $row['Item_Name'] . "</h1>";
					echo "<h3><i>" . $row['Description'] . "</i></h3>";
					echo ""
				}
			}	
			else {	
				echo "<h1>Sorry, this item does not exist.</h1>";
			 }
		?>

		<form name="bid" method="post" action="bid.php">
			Bid: <input name="bidAmount" type="text">
			<input type="submit" value="Submit">
		</form>
		
		</div>
	</body>
</html>