<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Volunteer Registration Form</title>
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
  </div><!-- end .header -->
  <div class="content">
  <h2 class="style2">  VOLUNTEER REGISTRATION FORM </h2>
  <br />

    <form action="updateform.php" method="get">
<h4 align="center"> Please enter all information on this form </h4>
<p><label> Name*<br />
    <span class="formwrap"><input type="text" name="First_Name" value="" size="40" class="wpcf7" /></span> </label></p>
<p><label> Address*<br />
    <span class="formwrap"><input type="text" name="Last_Name" value="" size="40" class="wpcf7" /></span> </label></p>
<p><label> Phone number*<br />
<span class="formwrap"><input type="text" name="Phone" value="" size="40" class="wpcf7" /></span></label></p>
<p><label> Your Email ID*<br />
    <span class="formwrap"><input type="email" name="Email" value="" size="40" class="wpcf7" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Age (apply only if 18 and older)*<br />
    <span class="formwrap"><input type="text" name="age" value="" size="40" class="wpcf7" /></span> </label></p>
<p><label> Skill Set*</label><br />

	<?php
		$volunteer["Choose Work"]="Choose Work";
		$volunteer["Miscellaneous Office"]="Miscellaneous Office Work";
		$volunteer["Database Management"]="Database Management";
		$volunteer["Cleaning"]="Cleaning";
		$volunteer["Equestrian Trail Maintenance"]="Equestrian Trail Maintenance";
		$volunteer["OHV Trail Maintenance"]="OHV Trail Maintenance";
		$volunteer["OHM Trail Maintenance"]="OHM Trail Maintenance";
		$volunteer["Hiking Trail Maintenance"]="Hicking Trail Maintenance";
		$volunteer["Mountain Biking Trail Maintenance"]="Mountain Biking Trail Maintenance";
		$volunteer["Landscaping"]="Landscaping"; ?>
		<tr>
		<td><select name = "volunteer" id = "volunteer"></td>
		</tr>
	<?php
			foreach ($volunteer as $work => $favorite )
			{
			echo "<option value=\"$favorite\"> $favorite </option> \n";
			}	?>
	</select>
		1st choice <br>
	<?php
		$volunteer1["none"]="none";
		$volunteer1["Miscellaneose Office"]="Miscellaneous Office Work";
		$volunteer1["Database Management"]="Database Management";
		$volunteer1["Cleaning"]="Cleaning";
		$volunteer1["Equestrian Trail Maintenance"]="Equestrian Trail Maintenance";
		$volunteer1["OHV Trail Maintenance"]="OHV Trail Maintenance";
		$volunteer1["OHM Trail Maintenance"]="OHM Trail Maintenance";
		$volunteer1["Hiking Trail Maintenance"]="Hicking Trail Maintenance";
		$volunteer1["Mountain Biking Trail Maintenance"]="Mountain Biking Trail Maintenance";
		$volunteer1["Landscaping"]="Landscaping";
	?>
		<tr>
		<td>
		<select name = "volunteer1" id = "volunteer1"></td>
		</tr>

	<?php
			foreach ($volunteer1 as $work => $favorite )
			{
			echo "<option value=\"$favorite\"> $favorite </option> \n";
			}
	?>
</select>
	2nd choice <br>
	<?php
		$volunteer2["none"]="none";
		$volunteer2["Miscellaneous Office"]="Miscellaneose Office Work";
		$volunteer2["Database Management"]="Database Management";
		$volunteer2["Cleaning"]="Cleaning";
		$volunteer2["Equestrian Trail Maintenance"]="Equestrian Trail Maintenance";
		$volunteer2["OHV Trail Maintenance"]="OHV Trail Maintenance";
		$volunteer2["OHM Trail Maintenance"]="OHM Trail Maintenance";
		$volunteer2["Hiking Trail Maintenance"]="Hicking Trail Maintenance";
		$volunteer2["Mountain Biking Trail Maintenance"]="Mountain Biking Trail Maintenance";
		$volunteer2["Landscaping"]="Landscaping";
	?>
		<tr>
		<td>
		<select name = "volunteer2" id = "volunteer2"></td>
		</tr>

	<?php
			foreach ($volunteer2 as $work => $favorite )
			{
			echo "<option value=\"$favorite\"> $favorite </option> \n";
			}	?>
</select>
	3rd choice<br/>
	<br/>
	<tr>
<p><label> How many hours per week are you willing to commit?*<br />
    <span class="formwrap"><input type="text" name="time" value="" size="40" class="wpcf7" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><input type="submit" value="Submit" class="submit" /></p>
<!-- <?php
// $id=$_GET['updateid']; ?> -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
