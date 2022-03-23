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
		REFERENCES
	</div>
	<div id="hea">
		WEB-REFERENCES
	</div>
	<div id="intros">
		<ol type="1">
			<li>http://www.diabetes.org/diabetes-basics/diagnosis/?loc=db-slabnav</li><br>
			<li>https://www.diabetes.org.uk/Guide-to-diabetes/Monitoring/Testing/</li><br>
			<li>https://www.staff.ncl.ac.uk/philip.home/who_dmc.htm/</li><br>
			<li>http://www.eatingwell.com/nutrition_health/weight_loss_diet_plans/diet_meal_plans/</li><br>
			<li>http://www.mayoclinic.org/diseases-conditions/diabetes/basics/tests-diagnosis/con-20033091</li><br>
		-------------------------------------------------------------------------------------------------------------------------------------
		</ol>
	</div>
	<div id="hea">
		JOURNAL-REFERENCES
	</div>
	<div id="intros">
		<ol type="1">
			<li>Wei Peng, Juhua Chen and Haiping Zhou, An Implementation of ID3 --- Decision Tree Learning Algorithm</li><br>
			<li>R. P. Ambilwade, R. R. Manza, Bharatratna P. Gaikwad, Medical Expert Systems for Diabetes Diagnosis: A Survey</li><br>
			<li>S. Sankaranarayanan, Dr. T. Pramananda Perumal, Diabetic diagnosis through data mining</li><br>
			<li>Seyedeh Talayeh Tabibi, Tawfik Saeed Zaki, Yousef Ataeepoor, Developing an Expert System for Diabetics Treatment</li><br>
			
		</ol>
	</div>
</div>
</form>
</body>
</html>