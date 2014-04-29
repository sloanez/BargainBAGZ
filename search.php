<?php
	
	
	// THIS IS NOT IMPLEMENTED YET
	
	
	
	
	
	$con=mysqli_connect("127.0.0.1","loops","password","infiniteloops");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	  echo "HELLOOO"
	$email = $_POST["email"];
	$password = $_POST["password"];


	$sql = mysql_query("SELECT * FROM Users WHERE Email='$email' AND password='$password' LIMIT 1");


	if(mysql_num_rows($sql) == 1){ 
        $row = mysql_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['fname'] = $row['first_name']; 
        $_SESSION['lname'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: index.html"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: login_page.php"); 
        exit; 
    } 

	echo mysqli_error($con);
	mysqli_close($con);
?>