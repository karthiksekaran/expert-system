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
<link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Project - JARVIS/bootstrap-log/bootstrap.min.css">

</head>
<body>
<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout"><button type="button" class="btn btn-Danger">Sign Out</button></div>
        </div>
    </div>
</div>

<div id="body">
	<div id="top-1" align="right">
		<a href="home.php">  <button type="button" class="btn btn-default">Home</button></a>&nbsp;&nbsp;
		<a href="Instructions.php">  <button type="button" class="btn btn-default">Instructions</button></a>&nbsp;&nbsp;
		<a href="bmicalcs.php" onclick="this.disabled=true">  <button type="button" class="btn btn-default">Start your Test</button></a>&nbsp;&nbsp;
		<a href="About-Us.php">  <button type="button" class="btn btn-default">About-Us</button></a>
	</div>
			
	<hr>
	<div id="re">Result:</div>
	<div id="res">
		Mr/Mrs <?php echo $userRow['username']; ?>.Thank You For your patience to answer all the questions. From your input I Conclude that you may have
	</div>
	<div id="intro-heading">
		TYPE-2 DIABETES
	</div>
<div id="intro">

	Type 2 Diabetes
By far, the most common form of diabetes is type 2 diabetes, accounting for 95% of diabetes cases in adults. Some 26 million American adults have been diagnosed with the disease.

Type 2 diabetes used to be called adult-onset diabetes, but with the epidemic of obese and overweight kids, more teenagers are now developing type 2 diabetes. Type 2 diabetes was also called non-insulin-dependent diabetes.

Type 2 diabetes is often a milder form of diabetes than type 1. Nevertheless, type 2 diabetes can still cause major health complications, particularly in the smallest blood vessels in the body that nourish the kidneys, nerves, and eyes. Type 2 diabetes also increases your risk of heart disease and stroke.

There is no cure for diabetes. Type 2 diabetes can, however, be controlled with weight management, nutrition, and exercise. Unfortunately, type 2 diabetes tends to progress, and diabetes medications are often needed.

An A1C test is a blood test that estimates average glucose levels in your blood over the previous three months. Periodic A1C testing may be advised to see how well diet, exercise, and medications are working to control blood sugar and prevent organ damage. The A1C test is typically done a few times a year.
</div>
<div id="med">
	<a href="Type-2-Medications.php">  <button type="button" class="btn btn-Primary">Medications</button></a>&nbsp;&nbsp;
	</div>
<div id="nav">
	<br>
	<br>
	<br><br><br><br><br><br>
		<br><br><br><br><br><br>

	</div>
</div>
<style type="text/css">
#top-left
{
	margin:-40px 10px 10px 10px;
}
#jarvis
{
padding:20px 10px 10px 100px;
}
#re
{
padding:10px 100px 10px 200px;
font-family:Times;
font-size:20;
}
#med
{
		padding:10px 100px 0px 1000px;
}
#res
{
	padding:10px 100px 0px 200px;
font-family:Times;
font-size:20;
}
</style>

</body>
</html>
