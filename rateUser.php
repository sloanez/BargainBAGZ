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
				<h2	class="header_text">Rate User</h2>
			</div>
		<!--End of Page Title-->

		<form action="rate.php" method="POST">
		Rating (out of 10): <select name="rating">
								<option value=1>1</option>
								<option value=1>2</option>
								<option value=1>3</option>
								<option value=1>4</option>
								<option value=1>5</option>
								<option value=1>6</option>
								<option value=1>7</option>
								<option value=1>8</option>
								<option value=1>9</option>
								<option value=1>10</option>
								</select>

		Comment: <input type="text" name="comment"><br>

		<input type="submit" value="Submit"> 
		</form>
		</div>
	</body>
</html>