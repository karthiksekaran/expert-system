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
	GESTATIONAL DIABETES MEDICATIONS
	</div>
<div id="intro">The two most common oral medications used for gestational diabetes treatment are glyburide (Glynase, Diabeta, Micronase) and metformin (Glumetza, Glucophage, Fortamet, Riomet).
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


