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

</head>

<body>
	<form action="Diagnosis_Results.php" method="post">


<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout"><button>Sign Out</button></a>
        </div>
    </div>
</div>

<div id="body">
<div id="top-1" align="right">
		<a href="home.php"><button>Home</button></a>&nbsp;&nbsp;
		<a href="Instructions.php"><button>Instructions</button></a>&nbsp;&nbsp;
		<a href="Main-Quest.php"><button>Start Your Test</button></a>&nbsp;&nbsp;
		<a href="About-Us.php"><button>About - Us</button></a>&nbsp;&nbsp;

	</div>
	<hr>
	<div id="intro-heading">
		FOOD PLAN - CHART
</div>
<div id="intro">
	<i>A diabetes meal plan is a guide that tells you how much and what kinds of food you can choose to eat at meals and snack times. A good meal plan should fit in with your schedule and eating habits. </i>
	</div>
</form>
</body>
</html>