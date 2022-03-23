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
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">  <button type="button" class="btn btn-Danger">Sign Out</button>
        </div>
    </div>
</div>

<div id="body">
		<div id="top-1" align="right">
		<a href="home.php">  <button type="button" class="btn btn-default">Home</button></a>&nbsp;&nbsp;
		<a href="Instructions.php">  <button type="button" class="btn btn-default">Instructions</button></a>&nbsp;&nbsp;
		<a href="lets-start.php" onclick="this.disabled=true">  <button type="button" class="btn btn-default">Start your Test</button></a>&nbsp;&nbsp;
		<a href="About-Us.php">  <button type="button" class="btn btn-default">About-Us</button>
</a>&nbsp;&nbsp;

	</div>
	<hr>
	<div id="intro-heading">
		INSTRUCTIONS:-
</div>
<div id="intro">
<ul type="square">
<li>The User should have a minimum knowledge to use this Expert System as given as follows:</li>
<ul type="disc">
<li>User should be able to understand technical terms(in English).</li>
<li>User have to answer for all the questions given in a proper way.</li>
<li>Incomplete data will cause you a incorrect result.</li>
</ul>
<li>Developer of this Expert System is not responsible, if the wrong input is passed and resulting in a wrong diagnosis and medication report generation
</li>
<li>User needs to have his latest blood test report to produce accurate results.</li>
<li>This Expert System is not a replacement of a human expert, but to check in prior before consult with a doctor.</li>
</li>
</ul><br><br><br>
</div>
<div id="nav">

	</div>
</div>
</body>
</html>
