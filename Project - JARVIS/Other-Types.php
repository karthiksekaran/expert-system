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
PRE - DIABETES
	</div>
<div id="intro">
A few rare kinds of diabetes can result from specific conditions. For example, diseases of the pancreas, certain surgeries and medications, or infections can cause diabetes. These types of diabetes account for only 1% to 5% of all cases of diabetes.
</div>
<br><br><br><br>
<div id="med">
	<a href="Pre-Diabetes.php">  <button type="button" class="btn btn-Primary">Medications</button></a>&nbsp;&nbsp;
	</div>
<div id="nav">
	<br>
	<br>
	<br><br><br><br><br><br>
		<br><br><br><br><br><br>

	</div>
</div>
<style>
#re
{
padding:10px 100px 10px 200px;
font-family:Times;
font-size:20;
}
#res
{
	padding:10px 100px 0px 200px;
font-family:Times;
font-size:20;
}
#med
{
		padding:10px 100px 0px 1000px;
}
</style>
</body>
</html>

