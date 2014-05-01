<?php 
// bidder id = person who bought it
// highest bid = buy it now price
// end auction time = now
// order history table
// order date = end auction date
	ob_start();
	session_start();
	$userid = $_SESSION['username'];

	echo $userid;
?>