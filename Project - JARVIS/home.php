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
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/Project - JARVIS/bootstrap-log/bootstrap.min.css">

</head>
<body>
<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">  
        	<button type="button" class="btn btn-Danger">Sign Out</button>
</a>
        </div>
    </div>
</div>

  </div>
<div id="body">
	<div id="top-1" align="right">
		<a href="home.php">  <button type="button" class="btn btn-default">Home</button></a>&nbsp;&nbsp;
		<a href="Instructions.php">  <button type="button" class="btn btn-default">Instructions</button></a>&nbsp;&nbsp;
		<a href="lets-start.php" >  <button type="button" class="btn btn-default">Start your Test</button></a>&nbsp;&nbsp;
		<a href="About-Us.php">  <button type="button" class="btn btn-default">About-Us</button></a>
&nbsp;&nbsp;

	</div>
				<div id="top-left" align="left">
<a href="User-Guide.php"><button type="button" class="btn btn-Default">User Guide</button></a>
</div>
<hr>
	&nbsp;&nbsp;<b><h3><div id="jarvis">J.A.R.V.I.S Expert System</div></h3></b>
	<div id="intro-heading">
		INTRODUCTION
</div>
<div id="intro">
	Diabetes Mellitus
	Diabetes mellitus (or diabetes) is a chronic, lifelong condition that affects your body's ability to use the energy found in food. There are three major types of diabetes: type 1 diabetes, type 2 diabetes, and gestational diabetes.
All types of diabetes mellitus have something in common. Normally, your body breaks down the sugars and carbohydrates you eat into a special sugar called glucose. Glucose fuels the cells in your body. But the cells need insulin, a hormone, in your bloodstream in order to take in the glucose and use it for energy. With diabetes mellitus, either your body doesn't make enough insulin, it can't use the insulin it does produce, or a combination of both.
Since the cells can't take in the glucose, it builds up in your blood. High levels of blood glucose can damage the tiny blood vessels in your kidneys, heart, eyes, or nervous system. That's why diabetes -- especially if left untreated -- can eventually cause heart disease, stroke, kidney disease, blindness, and nerve damage to nerves in the feet.
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
}
</style>
</body>
</html>