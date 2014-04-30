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
				<a href="categories-select.html" data-ajax="false" data-prefetch
						data-role="button" id="homebtn" class="home_button">BACK</a>
				</div>
				<div id="header_home">
					<a href="index.html" data-ajax="false" data-prefetch
						data-role="button" id="homebtn" class="home_button">Home</a>
				</div>				
			</div>			
			<!-- End of Header Section -->
			<!--Page Title-->
			<div id="headerFill" class="dynamic_text">
				<h3 class="header_text">Items containing "<?php echo $_GET["searchfor"]; ?>"<h3>
					

			</div>
			<!--End of Page Title-->
			

			<!--HERE WE LIST EVERYTHING CONTAINING THAT KEYWORD-->

			<?php
				$searchFor = $_GET["searchfor"];

				$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
			
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result = mysqli_query($con,"SELECT * FROM `Items` WHERE Item_Name LIKE '%{$searchFor}%'");

				if ($result && mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_array($result)){
						echo "<div id=\"nav\" class=\"dynamic_size\">
							<h3 class=\"dynamic_text\"></h3>
							<div id=\"list\">
								<ul class=\"dynamic\" data-role=\"listview\" data-inset=\"true\" data-theme=\"a\">
									<li><a href=\"itemPage.php?itemId=" . $row["Item_No"] . "\" rel=\"external\">" . $row['Item_Name'] . "</a></li>
								</ul>
							</div>
						</div>";
					}
				}
				else {
					echo "<h1>Sorry, this item does not exist</h1>";
				}
			?>


		</div>
	</body>
</html>
	