<?php
  	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
			
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$password = $_POST["password"];
	$company_type = $_POST["company-type"];
	$f_name = $_POST["fname"];
	$l_name = $_POST["lname"];
	$poc_name = $f_name." ".$l_name;
	$poc_email = $_POST["POC-email"];
	$phone = $_POST["phone"];
	$house_num = $_POST["house_num"];
	$street = $_POST["street"];
	$city = $_POST["city"];
	$zip = $_POST["zip"];
	$state = $_POST["state"];

	$revenue = $_POST["revenue"];

	$result = mysqli_query($con,"INSERT Into Users (Password,Phone_Num) Values ('$password', '$phone')");
	echo mysqli_error($con);
	$user_result = mysqli_query($con,"SELECT User_Id from Users WHERE Phone_Num = '$phone'");

	$user_obj = mysqli_fetch_array($user_result);
	$user_id = $user_obj['User_Id'];
	echo mysqli_error($con);

	$result2 = mysqli_query($con,"INSERT Into Companies (User_Id, Category, Revenue, POC_Name, POC_Email) Values ('$user_id', '$company_type', '$revenue', '$poc_name', '$poc_email')");
	echo mysqli_error($con);
	$result3 = mysqli_query($con,"INSERT Into Address (Street,House_Num,City,Stayt,ZIP,User_Id) Values ('$street', '$house_num', '$city', '$state', '$zip', '$user_id')");
	echo mysqli_error($con);


?>