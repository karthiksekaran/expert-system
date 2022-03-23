<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="http://localhost/Project - JARVIS/bootstrap-log/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="help.css" type="text/css" />
</head>

<body>
	<form action="Screening_Results.php" method="post">


<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
          Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">
          <button type="button" class="btn btn-Danger">Sign Out</button></a></div>
        </div>
    </div>
</div>

<div id="body">
	<br><br><br>

	<hr>
	<div id="intro-heading">
SCREENING TESTS
	</div>
<div id="intro">
	<div id="mainframe">
<div id="note">
	<span id="head">
	Screening Tests(Extremity Finder)
</span>
<br>
<br>
<span id="subhead">
		Screening Test is a method to find out the extremity level of blood glucose level.<br><br>This method is common for all types of diabetes.
	
	</span>
	<br>
	<br>
<h5>Please Enter your Correct Details From Lab Report<font color="red" size="5">*</font></h5></div>
<br>
<fieldset><center><legend>Diagnosis Tests</legend></center><br>
<b><u>Test 1:HbA1c</u></b><br><br>
HbA1c Test Value:
<input type="text" name="HbA1c" maxlength="5">&nbsp;&nbsp;%</input><div class="center">
  <span class="qs">? <span class="popover above">HbA1c value should lies between 6.5 and 7.4</span></span>
</div>
<br>
<b><u>Test 2:Random Plasma Glucose</u></b><br><br>
RPG Value:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="RPG" maxlength="5">&nbsp;&nbsp;mg/dl</input>
<div class="center">
  <span class="qs">? <span class="popover above">RPG value should lies between 140 to 200</span></span>
</div>
<br>
<b><u>Test 3:Fasting Plasma Glucose</u></b><br><br>
FPG Value:
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="FPG" maxlength="5">&nbsp;&nbsp;mg/dl</input>
<div class="center">
  <span class="qs">? <span class="popover above">FPG value should lies between 100 to 126</span></span>
</div>
<br>
<br>
</div>
</fieldset>
<div id="subres">
	<div style="position:absolute;padding:0px 0px 10px 0px;margin :70px 0px 10px 400px">
	<input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" name="reset" value="reset">
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>
