<?php
/*************************************************************************************************************
*Name: Odette Simons
*Assignment: LAB 015 database connection include file
*Date: 12/3/2012
*Due Date: 12/07/2012
*Class: CISP1720
*Connects to Database and checks for connection error
****************************************************************************************************************/

$osconn = new mysqli('localhost','root','','wildlife');						//Connect to Databas

if ($osconn->connect_errno) 															//Error message if connection failed
		{
		 echo "<p>";
		 printf("Connect failed: %s\n", $osconn->connect_error);
		 exit();
		}


?>
