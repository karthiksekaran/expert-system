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
            Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">
            <button type="button" class="btn btn-Danger">Sign Out</button></a></div>
        </div>
    </div>
</div>

<div id="body">
    <br><br><br>
	<hr>
	<div id="intro-heading">

    <div class="container-fluid">
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="min-width:2em;width: 80%;">
80%
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
<div id="intro-sub">
Question 17: Poor Wound Healing
	</div>
    <div id="para">
        Poor Wound healing is an intricate process where the skin or other body tissue repairs itself after injury after a long duration ot time.
    </div>
<div id="intro-main">
	 <?php
	 if(isset($_POST['quest17']))
{
$quest17=$_POST['quest17'];
$link = mysql_connect("localhost", "root", "geeks");
mysql_select_db("test", $link);
$result=mysql_query("alter table ".$row." add q17 varchar(4) NOT NULL",$link);
$insert = mysql_query("update ".$row." set q17=('$quest17') where 1=1", $link);
header('Location:http://localhost/Project - JARVIS/Main-Quest18.php');    
}    
?>
<form action="" method="post" name="query">
<div>
	<p id="demo">
<input type="radio" name="quest17" value="1" onclick="javascript: submit()">Yes
<input type="radio" name="quest17" value="0" onclick="javascript: submit()">No<br></p>
</div>
</div>
<style>
#para
{
    padding:50px 40px 0px 150px;
    margin:0px 40px 0px 0px;
    font-size:16;
    font-family:Arial;
    font-style:italic;
}
</style>
</body>

</html>

