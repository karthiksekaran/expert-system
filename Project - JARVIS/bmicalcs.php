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
	<form action="bmicalc.php" method="post" name="bmi">
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
		<a href="bmicalcs.php" onclick="this.disabled=true">  <button type="button" class="btn btn-default">Start your Test</button></a>&nbsp;&nbsp;
		<a href="About-Us.php">  <button type="button" class="btn btn-default">About-Us</button>
</a>&nbsp;&nbsp;

	</div>
	<hr>

	<div id="intro-heading">
		BODY - MASS - INDEX CALCULATOR
</div>
<div id="intro">
	&nbsp;&nbsp;&nbsp;&nbsp;Hi. <?php echo $userRow['username']?>
<table align="justify" cellpadding="10" cellspacing="10">
<tr>
<td>Enter your Height(in cms)</td>
<td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="heights"></td>
</tr>
<br><br></table><br><br>
<table align="center" cellpadding="10" cellspacing="10">
<tr>
<td>Enter your Weight(in kgs)</td>
<td>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="weights" onchange="javascript:submit()"></td>
</tr>
</table>
</div>
<div id="nav">
	</div>
</div>
</form>
</body>
</html>

