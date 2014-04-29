<?php


// THIS WAS NOT IMPLEMENTED YET


$con=mysqli_connect("localhost","zjs5048","rt74937LT","infiniteloops");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Users");

while($row = mysqli_fetch_array($result))
  {
  	echo $row['Name'] . " " . $row['Email'];
  	echo "<br>";
  }

mysqli_close($con);
?>