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
GESTATIONAL DIABETES
	</div>
<div id="intro">

Diabetes that's triggered by pregnancy is called gestational diabetes (pregnancy, to some degree, leads to insulin resistance). It is often diagnosed in middle or late pregnancy. Because high blood sugar levels in a mother are circulated through the placenta to the baby, gestational diabetes must be controlled to protect the baby's growth and development.

According to the National Institutes of Health, the reported rate of gestational diabetes is between 2% to 10% of pregnancies. Gestational diabetes usually resolves itself after pregnancy. Having gestational diabetes does, however, put mothers at risk for developing type 2 diabetes later in life. Up to 10% of women with gestational diabetes develop type 2 diabetes. It can occur anywhere from a few weeks after delivery to months or years later.

With gestational diabetes, risks to the unborn baby are even greater than risks to the mother. Risks to the baby include abnormal weight gain before birth, breathing problems at birth, and higher obesity and diabetes risk later in life. Risks to the mother include needing a cesarean section due to an overly large baby, as well as damage to heart, kidney, nerves, and eye.
Treatment during pregnancy includes working closely with your health care team and:
Careful meal planning to ensure adequate pregnancy nutrients without excess fat and calories
Daily exercise
Controlling pregnancy weight gain
Taking diabetes insulin to control blood sugar levels if needed
</div>
<br>
<div id="med">
	<a href="Gestational-Diabetes-Medications.php">  <button type="button" class="btn btn-Primary">Medications</button></a>&nbsp;&nbsp;
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

