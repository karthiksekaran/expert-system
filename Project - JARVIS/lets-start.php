<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$row=$userRow['username'];
$res2=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow2=mysql_fetch_array($res2);
$row2=$userRow2['email'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Project - JARVIS/bootstrap-log/bootstrap.min.css">
<script type="text/javascript">
window.history.forward();
function noBack()
{
	window.history.forward();

}
</script>
</head>
<body onload="noBack();" onpageshow="if(event.persisted) noBack();" onunload="">
<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout"><button type="button" class="btn btn-Danger">Sign Out</button></div>
</a>
        </div>
    </div>
</div>

<div id="body">
	<div id="top-1" align="right">
    <a href="home.php">  <button type="button" class="btn btn-default">Home</button></a>&nbsp;&nbsp;
    <a href="Instructions.php">  <button type="button" class="btn btn-default">Instructions</button></a>&nbsp;&nbsp;
    <a href="bmicalcs.php" onclick="this.disabled=true">  <button type="button" class="btn btn-default" disabled>Start your Test</button></a>&nbsp;&nbsp;
    <a href="About-Us.php">  <button type="button" class="btn btn-default">About-Us</button></a>
	</div>
	<hr>
	<div id="intro-heading">
	</div>
<div id="intro">
	 <?php
echo "Okay"; ?> <b><i> <?php echo "$userRow[username]"?></i></b>. <?php echo "Everything Seems to be fine.
Lets start the test."; ?>
<div id="para">
    Please select any one of the options given below:<br>
    If you have a lab report with you, then you can proceed with the option "With Report"<br>
    Else, please select "Without Report" option.<br>
    Thank you
    </div>
<br><br>
<form action="" method="post" name="query">
<div>
	<p id="demo">
        <div id="but">
<a href="http://localhost/Project - JARVIS/index-5.php"> <button type="button" class="btn btn-Primary">Without Report</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://localhost/Project - JARVIS/Screening_Tests.php"><button type="button" class="btn btn-Primary">With Report</button></div>
</div>
</a>
</div>
</div>
<style>
#but
{
right:500px;
padding:40px 200px 100px 300px;
}
#para
{
padding:40px 50px 20px 80px;
}
</style>
</body>
</html>

