<!DOCTYPE HTML>
<?php

	$name = $_GET["name"];
	$name = trim($_GET['name']);		//Will trim white spaces before and after text
	$name = ucfirst (strtolower($name));	//Will convert input of first letter of Name to uppercase
	$name = strip_tags($name);		//This function return a string with HTML and PHP tags stripped from a given string
	$address= $_GET["address"];
	$address= trim ($_GET["address"]);
	$address = ucfirst (strtolower($address));
	$address = strip_tags($address);
	$email = $_GET["email"];
	$email = trim ($_GET["email"]);
	$email = strip_tags($email);
	$phone = $_GET["phone"];
	$phone = trim ($_GET["phone"]);
	$phone = strip_tags($phone);
	$message = $_GET["message"];
	$bouquets = $_GET["bouquets"];
	$bouquets1 = $_GET["bouquets1"];
	$bouquets2 = $_GET["bouquets2"];


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registration</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>bouquets Registration Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #FFFFFF;
}
.style1 {
	font-size: 12px;
	font-style: oblique;
}
</style>
</head>

<body>

	<div class="container">
	  <div class="header">

	  </div><!-- end .header -->
  <div class="content">
  <h2 class="style2"> SUCCESS </h2>
  <br />


<?php
	if(empty($name) || empty($address)|| empty($email) || empty($phone) ) 			//All fields are submitted with data.If empty sent Error message
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p> You need to fill out all Information</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>"; // Return button to registration page
		exit();
		}
	else if (is_numeric($name)|| is_numeric($address))					//Names are are not numeric. If numeric sent Error message
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can not input a numeric values in following Fileds</p>\n";
		echo "<p>First Name, Last Name, message Prefrenc, bouquets work</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (strlen($name) > 20)				//First Name can only be 20 characters long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 20 charachters for First Name!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (strlen ($address) > 30)					// last Name can only be 30 characters long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 30 charachters for Last Name!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();

		}
	else if (strlen ($email) > 55)						//email can only be 55 characters long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 55 charachters for email!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (!is_numeric ($phone))					//phone number can only be numeric
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only add numeric values with no spaces (4235555555)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}

	else if (strlen ($phone) > 10)					//phone number can be 10 numbers long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 10 charachters for phone number with no spaces (4235555555)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if(!empty($email))
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))			//If email is not correct return error message
			{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You entred an incorect email (jon@email.com)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
			}
		}



include "connect.php";	//Conect to Database with external file
	$con=new mysqli($hostname,$username,$password,"$database");
$query = mysqli_query($con,"INSERT INTO `contactform`(`name`, `address`, `email`, `phone`, `message`, `bouquets`, `bouquets1`, `bouquets2`)
VALUES ('$name','$address','$email','$phone','$message','$bouquets','$bouquets1','$bouquets2')");



if(!$query) // If Insert did not work
	{
	echo "<p>Sorry! Something went wrong with your entry.</p>";
	echo "<p>Please make sure you have not registered before with the same email address</p>";
	echo "<p>Return to registration form. </p>";
	echo "<br/>";
	echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";

	}
	else // If Insert worked print out Information
	{
	echo "<h4> Thank you for your interest!</h4> </p>\n";
	echo "<br/>";
	echo "<h4>Following information has been entered in our database </h4>\n";
	echo "<p><b> First Name: </b>$name </p>\n";
	echo "<p><b> Last Name: </b>$address </p>\n";
	echo "<p><b> email: </b>$email </p>\n";
	echo "<p><b> phone: </b>$phone </p>\n";
	echo "<p><b> Preferred message: </b>$message </p>\n";
	echo "<p><b> bouquets Work: </b>$bouquets </p>\n";
	echo "<p><b> bouquets Work 2nd: </b>$bouquets1 </p>\n";
	echo "<p><b> bouquets Work 3rd: </b>$bouquets2 </p>\n";

	echo "<br/>";

	echo "<p><a href='http://localhost/my%20project/index.php'>Back to Website</a></p>"; // link to Doe Mountain Webseit
	}

// Disconect Database conecction
?>
<h4 style="color:#090"><i> Thank youfor bouquetsing </i></h4>
 </div>
  <div class="footer">
    <p><a href="http://localhost/wildlife/index.html">Wildlife Website</a> | <a href="dbform.php">bouquets Registration Form</a> |</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
