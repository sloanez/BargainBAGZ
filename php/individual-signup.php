<?php
$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email = $_POST["email"];
$password = $_POST["password"];
$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$phone = $_POST["phone"];
$house_num = $_POST["house_num"];
$street = $_POST["street"];
$city = $_POST["city"];
$zip = $_POST["zip"];
$state = $_POST["state"];

$cc_num = $_POST["cc_num"];
$cc_type = $_POST["cc_type"];
$exp_date1 = $_POST["exp_date1"];
$exp_date2 = $_POST["exp_date2"];
$exp_date = $exp_date1."/".$exp_date2;
$sec_num = $_POST["sec_num"];

$income = $_POST["income"];


$result = mysqli_query($con,"INSERT Into Users (Email,Password,Phone_Num) Values ('$email', '$password', '$phone')");
echo mysqli_error($con);
$user_id = mysqli_query($con,"SELECT User_Id from Users WHERE Email = '$email')");
echo mysqli_error($con);
$result2 = mysqli_query($con,"INSERT Into Individuals (User_Id, Annual_Income, Age, Male) Values ('$user_id', '$income', '$age', '$gender')");
echo mysqli_error($con);
$result3 = mysqli_query($con,"INSERT Into Address (Street,House_Num,City,Stayt,ZIP,User_Id) Values ('$street', '$house_num', '$city', '$state', '$zip', '$user_id')");
echo mysqli_error($con);
$result4 = mysqli_query($con,"INSERT Into Credit_Card (Card_No,Security_No,Card_Type,Expiration,User_Id) Values ('$cc_num', '$sec_num', '$cc_type', '$exp_date', '$user_id')");
echo mysqli_error($con);

mysqli_close($con);
?>