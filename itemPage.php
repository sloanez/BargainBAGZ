<!DOCTYPE html>
<html>
<head>
<title>Item Listing</title>
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
			

			if (count($_GET) > 0) {
				$itemId = $_GET["itemId"];
			}
			else {
				$itemId = -1;
			}

			$result = mysqli_query($con,"SELECT * FROM `Items` WHERE Item_No = $itemId");

			if ($result && mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_array($result)){
					// Item Name
					echo "<h1>" . $row['Item_Name'] . "</h1>";
					
					// Seller: MAKE IT A LINK
					echo "Seller ID: <a href=\"index.html\">" . $row['Seller_Id'] . "</a>";


					// Item Description 
					echo "<br><br><b><i>" . $row['Description'] . "</i></b>";
					
					if ($row['URL']) {
						echo "<br><br>Click <a href=\"" . $row['URL'] . "\"> here</a> for more information about this item.";
					}
					
					// Shipped From State
					$seller = $row['Seller_Id'];
					
					$state = mysqli_query($con,"SELECT * FROM `Address` WHERE User_Id = $seller");

					$newRow = mysqli_fetch_array($state);

					echo "<br><br><b>Shipped from</b>: " . $newRow['Stayt'];

					echo "<br><br><hr>";

					
					// Current Highest Bid
					echo "<br><br><b>Highest Bid</b>: $" . $row['Highest_Bid'];

					// Countdown to end of auction 
					$end = strtotime($row['End_Auction']);

					$now = time();

					$diff = $end - $now;

					$days = floor($diff / 60 / 60 / 24);
					$hours = floor(($diff-($days*60*60*24))/60/60);
					$mins = floor(($diff-($days*60*60*24)-($hours*60*60))/60);
					$secs = floor(($diff-($days*60*60*24)-($hours*60*60))-($mins *60));

					echo "<br><br><b>Time left until end of auction</b>: " . $days . " days, " . $hours . " hours, " . $mins . " minutes, and " . $secs . " seconds.";;


					// Buy it now
					echo "<br><br><b>Buy It Now Price</b>: $" .  $row['Buy_Now_Price'] . "<form name=\"buyNow\" method=\"post\" action=\"buynow.php\">
					<input type=\"submit\" value=\"Buy It Now!\">
					</form>";


					// Bid for item
					$nextBid = ($row['Highest_Bid'] * .05) + $row['Highest_Bid'];

					echo "<br><br><form name=\"bid\" method=\"post\" action=\"bid.php\">
							<b>Bid</b> (Must be at least: $" . $nextBid . "):<input name=\"bidAmount\" type=\"text\">
							<input type=\"submit\" value=\"Submit\">
						</form>";
				}
			}	
			else {	
				echo "<h1>Sorry, this item does not exist.</h1>";
			 }
		?>
		<br><br>
		</div>
	</body>
</html>