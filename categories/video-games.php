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
				<a href="electronics.php" data-ajax="false" data-prefetch
						data-role="button" id="homebtn" class="home_button">Back</a>
				</div>
				<div id="header_home">
					<a href="../bagz-home.php" data-ajax="false" data-prefetch
						data-role="button" id="homebtn" class="home_button">Home</a>
				</div>				
			</div>		
			<!-- End of Header Section -->
			<!--Page Title-->
			<div id="headerFill" class="dynamic_text">
				<h2	class="header_text">Video Games</h2>
			</div>
			<!--End of Page Title-->
			<!--Menu Options-->
			<div id="nav" class="dynamic_size">
				<h3 class="dynamic_text"></h3>
				<div id="list">
					<ul class="dynamic" data-role="listview" data-inset="true" data-theme="a">
						<li><a href="video-games-view.php" rel="external">All Video Games</a></li>
						<li><a href="sega-view.php" rel="external">SEGA</a></li>
					</ul>
				</div>
			</div>
			<!--End of Menu Options-->
		</div>
	</body>
</html>
	