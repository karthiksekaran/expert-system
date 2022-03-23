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
<META HTTP-EQUIV=Refresh CONTENT="10; URL=http://localhost/Project - JARVIS/Main-Quest.php">
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

<div id="body">
<br><br><br>
	</div>
	<div id="intro-heading">
B-M-I RESULT
	</div>
<div id="intro">
	<?php
$height=$_POST["heights"];
$weight=$_POST["weights"];
$height_conv_mtr=$height/100;
$bmi=$weight/($height_conv_mtr*2);
if(($height<=0))
{
	echo "Please enter a valid Input";
	}
	else
	{
echo "BMI Value is:".$bmi;
echo "<br>";
{
if($bmi<=18.5)
{
echo "Underweight Problem";	
echo "<br>";
echo "A lean BMI can indicate that your weight maybe too low.";
echo "<br>";
echo" You should consult your physician to determine if you should gain weight, as low body mass can decrease your body's immune system, which could lead to ilness.";
}
if(($bmi>18.5)&&($bmi<24.9))
{
	echo "Normal BMI";
	echo "<br>";
	echo "People whose BMI is within 18.5 to 24.9 possess the ideal amount of body weight,";
	echo "<br>";
	echo "associated with living longest, the lowest incidence of serious ilness, as well as being perceived as more physically attractive than people with BMI in higher or lower ranges.";
}
if(($bmi>25)&&($bmi<29.9))
{
	echo "Overweight Problem";
	echo "<br>";
	echo "People falling in this BMI range are considered overweight and would benefit from ";
	echo "<br>";
	echo" finding healthy ways to lower their weight, such as diet and exercise. Individuals who fall in this range are at increased risk for a variety of ilnesses.";
}
if($bmi>30)
{
	echo" Obese Problem";
	echo "<br>";
	echo "Individuals with a BMI over 30 are in a physically unhealthy condition, which puts";
	echo "<br>";
echo "them at risk for serious ilnesses such as heart disease, diabetes, high blood pressure, gall bladder disease, and some cancers. These people would benefit greatly by modifying their lifestyle.";
}
}
}
?>
</div>
</div>
<div id="msg">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="txt">Please wait for 10 seconds.. It will automatically redirect to another test page</span>
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


