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
		
		TYPE-1 DIABETES
	</div>
<div id="intro">
	Type 1 Diabetes
Type 1 diabetes is also called insulin-dependent diabetes. It used to be called juvenile-onset diabetes, because it often begins in childhood.

Type 1 diabetes is an autoimmune condition. It's caused by the body attacking its own pancreas with antibodies. In people with type 1 diabetes, the damaged pancreas doesn't make insulin.

This type of diabetes may be caused by a genetic predisposition. It could also be the result of faulty beta cells in the pancreas that normally produce insulin.

A number of medical risks are associated with type 1 diabetes. Many of them stem from damage to the tiny blood vessels in your eyes (called diabetic retinopathy), nerves (diabetic neuropathy), and kidneys (diabetic nephropathy). Even more serious is the increased risk of heart disease and stroke.

Treatment for type 1 diabetes involves taking insulin, which needs to be injected through the skin into the fatty tissue below. 
</div>
<div id="med">
	<a href="Type-1-Medications.php">  <button type="button" class="btn btn-Primary">Medications</button></a>&nbsp;&nbsp;
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

