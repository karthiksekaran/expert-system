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
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">  <button type="button" class="btn btn-Danger">Sign Out</button></a>
        </div>
    </div>
</div>
<div id="top-left" align="left">
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="food.php"><button type="button" class="btn btn-Default">Food-Plan</button></a>
</div>
<div id="body">
<br><br>
	</div>
	<div id="intro-heading">
	PRE - DIABETES MEDICATIONS
	</div>
<div id="intro">Your doctor may prescribe metforminmetformin (Glucophage). If you need medicine, your doctor is most likely to prescribe this one. Metformin reduces how much glucose the liver makes. It can also lower insulin resistance.

Talk with your doctor to find out if you need medicine in addition to lifestyle changes to lower your insulin resistance.
</div>
</div>

	<style>
	#msg
	{
		padding:150px 10px 500px 220px;
	}
	#txt
	{
		background-color: black;
		color:white;
	}
	</style>
</body>
</html>


