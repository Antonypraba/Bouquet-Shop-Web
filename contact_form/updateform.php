<!DOCTYPE HTML>
<?php
	$First_Name = $_GET["First_Name"];
	$First_Name = trim($_GET['First_Name']);
	$First_Name = ucfirst (strtolower($First_Name));
	$First_Name = strip_tags($First_Name);
	$Last_Name= $_GET["Last_Name"];
	$Last_Name= trim ($_GET["Last_Name"]);
	$Last_Name = ucfirst (strtolower($Last_Name));
	$Last_Name = strip_tags($Last_Name);
	$Email = $_GET["Email"];
  $Phone = $_GET["Phone"];
	$Phone = trim ($_GET["Phone"]);
	$Phone = strip_tags($Phone);
	$age = $_GET["age"];
	$volunteer = $_GET["volunteer"];
	$volunteer1 = $_GET["volunteer1"];
	$volunteer2 = $_GET["volunteer2"];
	$time = $_GET["time"];
?>

<html>
<head>

<title>updation</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volunteer Registration Form</title>
</head>
<body>
<?php
	if(empty($First_Name) || empty($Last_Name)|| empty($Email) || empty($Phone) ) 			//All fields are submitted with data.If empty sent Error message
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p> You need to fill out all Information</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>"; // Return button to registration page
		exit();
		}
	else if (is_numeric($First_Name)|| is_numeric($Last_Name))					//Names are are not numeric. If numeric sent Error message
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can not input a numeric values in following Fileds</p>\n";
		echo "<p>First Name, Last Name, Contact Prefrenc, Volunteer work</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (strlen($First_Name) > 20)				//First Name can only be 20 characters long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 20 charachters for First Name!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (strlen ($Last_Name) > 30)					// last Name can only be 30 characters long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 30 charachters for Last Name!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();

		}
	else if (strlen ($Email) > 55)						//Email can only be 55 characters long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 55 charachters for Email!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if (!is_numeric ($Phone))					//Phone number can only be numeric
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only add numeric values with no spaces (4235555555)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}

	else if (strlen ($Phone) > 10)					//Phone number can be 10 numbers long
		{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You can only use 10 charachters for Phone number with no spaces (4235555555)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
		}
	else if(!empty($Email))
		{
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL))			//If Email is not correct return error message
			{
		echo "<p><b>Incorrect Input</b></p>\n";
		echo "<p>You entred an incorect Email (jon@email.com)!</p>\n";
		echo "<br/>";
		echo "<p><input type='button' value='Retry' onClick='history.go(-1)'></p>";
		exit();
			}
		}



include "dbcon.php";


$query = "UPDATE `regform` SET

`First_Name`='$First_Name',`Last_Name`='$Last_Name',`Email`='$Email',`Phone`='$Phone',`age`='$age',`volunteer`='$volunteer',`volunteer1`='$volunteer1',`volunteer2`='$volunteer2',`time`='$time' WHERE Email='$Email'";

$result = mysqli_query($osconn, $query);

if($result) // If Insert did not work
	{
	echo "Updated";
}
	else // If Insert worked print out Information
	{
	echo "not updated";
	}

mysqli_close($osconn); // Disconect Database conecction
?>

</body>
</html>
