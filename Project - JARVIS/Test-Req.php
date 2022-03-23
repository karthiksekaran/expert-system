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
		REPORT AVAILABILITY
</div>
<br><br><br>

<div id="intro">
	Click on With Report Button, if you have a <br>complete Lab Test Report having Diagnosed <br>Diabetes Mellitus informations
	</div>
	<div id="in">
			Click on Without Report Button, if you doesn't have your Lab Report
	</div>
<br><br><br>
<div id="but1">
	<a href="Screening_Tests.php"><button>With Report</a>
	</div>
	<div id="but2">
	<a href="bmicalcs.php"><button>Without Report</a>
</div>
</div>
<style>
#but1
{
	padding:30px 10px 0px 80px ;
	margin :0px 200px 0px 200px;
}
#but2
{
	padding:10px 10px 0px 80px ;
	margin :-20px 200px 0px 700px;
}
#in
{
	padding:10px 10px 0px 80px ;
	margin :-80px 200px 0px 700px;
	font-size:18;
}
</style>
</form>
</body>
</html>