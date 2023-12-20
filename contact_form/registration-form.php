<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #FFFFFF;
}
.style1 {
	font-size: 12px;
	font-style: oblique;
}

wpcf7 input[type=text], .wpcf7 input[type=email], .wpcf7 input[type=password] {
    border: solid #d1d1d1 1px !important;
}
input[type="text"], input[type="email"], input[type="password"], textarea {
    background-color: #f5f5f5;
}
.wpcf7 {
    height: 16px;
    padding: 19px 19px;
    width: 100%;
    font-size: 13px;
}
.formwrap {
    display: block;
    padding-right: 38px;
    margin-top: 7px;
}

body * {
    border-color: #828282;
}
input[type="submit"] {
    background-color: #5dc269;
}
.submit {
    padding: 20px;
    letter-spacing: 0;
    text-transform: none;
    width: 100%;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 800;}
</style>
</head>

<body>

<div class="container">
  <div class="header">
    <p><a href=""><img src="C:\xampp\htdocs\My Project\images\01.jpg" width="873" height="145" alt="logo" /></a></p>
  </div><!-- end .header -->
  <div class="content">
  <h2 class="style2">  CUSTOMER CONTACT FORM </h2>
  <br />

    <form action="dbform.php" method="get">
<h4 align="center"> Please enter all information on this form </h4>
<p><label> Name*<br />
    <span class="formwrap"><input type="text" name="name" value="" size="40" class="wpcf7" /></span> </label></p>
<p><label> Address*<br />
    <span class="formwrap"><input type="text" name="address" value="" size="40" class="wpcf7" /></span> </label></p>
<p><label> Phone number*<br />
<span class="formwrap"><input type="text" name="phone" value="" size="40" class="wpcf7" /></span></label></p>
<p><label> Your Email ID*<br />
    <span class="formwrap"><input type="email" name="email" value="" size="40" class="wpcf7" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Message *<br />
    <span class="formwrap"><input type="text" name="message" value="" size="40" class="wpcf7" /></span> </label></p>
<p><label> Your Favorite Bockey*</label><br />

	<?php
		$bouquets["Basket bouquets"]="Basket bouquets";
		$bouquets[" Hand-tied bouquets"]=" Hand-tied bouquets";
		$bouquets["Rose bouquets"]="Rose bouquets";
		$bouquets["Orchid bouquets"]="Orchid bouquets";
		$bouquets["Lily of the Valley"]="Lily of the Valley";
		$bouquets[" Pomander bouquet"]=" Pomander bouquet";
	?>
		<tr>
		<td><select name = "bouquets" id = "bouquets"></td>
		</tr>

	<?php
			foreach ($bouquets as $work => $favorite )
			{
			echo "<option value=\"$favorite\"> $favorite </option> \n";
			}

	?>
	</select>
		1st choice <br>
	<?php
	$bouquets1["Basket bouquets"]="Basket bouquets";
	$bouquets1[" Hand-tied bouquets"]=" Hand-tied bouquets";
	$bouquets1["Rose bouquets"]="Rose bouquets";
	$bouquets1["Orchid bouquets"]="Orchid bouquets";
	$bouquets1["Lily of the Valley"]="Lily of the Valley";
	$bouquets1[" Pomander bouquet"]=" Pomander bouquet";
	?>
		<tr>
		<td>
		<select name = "bouquets1" id = "bouquets1"></td>
		</tr>

	<?php
			foreach ($bouquets1 as $work => $favorite )
			{
			echo "<option value=\"$favorite\"> $favorite </option> \n";
			}

	?>
</select>
	2nd choice <br>
	<?php
	$bouquets2["Basket bouquets"]="Basket bouquets";
	$bouquets2[" Hand-tied bouquets"]=" Hand-tied bouquets";
	$bouquets2["Rose bouquets"]="Rose bouquets";
	$bouquets2["Orchid bouquets"]="Orchid bouquets";
	$bouquets2["Lily of the Valley"]="Lily of the Valley";
	$bouquets2[" Pomander bouquet"]=" Pomander bouquet";
	?>
		<tr>
		<td>
		<select name = "bouquets2" id = "bouquets2"></td>
		</tr>

	<?php
			foreach ($bouquets2 as $work => $favorite )
			{
			echo "<option value=\"$favorite\"> $favorite </option> \n";
			}

	?>
</select>
	3rd choice<br/>
	<br/>
	<tr>

<!--

<p><label> How many hours per week are you willing to commit?*<br />
    <span class="formwrap"><input type="text" name="time" value="" size="40" class="wpcf7" aria-required="true" aria-invalid="false" /></span> </label></p> -->
<p><input type="submit" value="Submit" class="submit" /></p>




<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  </div>
  <div class="footer">
    <p><a href="http://www.doemountain.org/">back to  Website</a> | <a href="dbform.php"> Customer Contact Form</a> |</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
