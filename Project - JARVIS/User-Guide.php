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
<link rel="stylesheet" href="help.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Project - JARVIS/bootstrap-log/bootstrap.min.css">


</head>

<body>
	<form action="Diagnosis_Results.php" method="post">


<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;
        	<button type="button" class="btn btn-Danger">Sign Out</button>
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
	<hr>
	<div id="intro-heading">
		<b><u>User-Guide</u></b>
	</div>
	<div id="intro">
		Educating people to earn some prior knowledge to know about diabetes mellitus and how to use this system.
	</div>
	<div id="intro-heading">
		Diabetes</div>
		
	<div id="intro">
		A disorder of the metabolism causing excessive thirst and the production of large amounts of urine.
	</div>
	<div id="intro-heading">
		Diabetes Mellitus Classifications:
	</div>
	<div id="subh">
		Type - 1
	</div>
	<div id="subb">
		Type 1 diabetes, once known as juvenile diabetes or insulin-dependent diabetes, is a chronic condition in which the pancreas produces little or no insulin, a hormone needed to allow sugar (glucose) to enter cells to produce energy.
	</div>
	<div id="subh">
		Type - 2 
	</div>
	<div id="subb">
		Type 2 diabetes, once known as adult-onset or noninsulin-dependent diabetes, is a chronic condition that affects the way your body metabolizes sugar (glucose), your body's important source of fuel.
	</div>
<div id="subh">
	Gestational Diabetes
</div>
<div id="subb">
	Gestational diabetes (or gestational diabetes mellitus, GDM) is a condition in which women without previously diagnosed diabetes exhibit high blood glucose (blood sugar) levels during pregnancy (especially during their third trimester).
	</div>
	<div id="subh"> Other Form of Diabetes</div>
	<pre><div id="subb">
		--> Genetic defects of beta-cell function
		--> Genetic defects in insulin action
		--> Diseases of the exocrine pancreas
		--> Endocrinopathies
		--> Drug- or chemical-induced
		--> Infections
		--> Uncommon forms of immune-mediated diabetes
		--> Other genetic syndromes sometimes associated with diabetes
	</div>
</pre>
</div>
</form>
</body>
</html>