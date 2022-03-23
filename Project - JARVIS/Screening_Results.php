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

<div id="body">
<br><br><br>
	</div>
	<div id="intro-heading">
SCREENING TEST RESULT
	</div>
<div id="intro">
	<?php
$hba1c=$_POST['HbA1c'];
$rpg=$_POST['RPG'];
$fpg=$_POST['FPG'];
$count1=0;
$count2=0;
$count3=0;
$count=0;
{
if($hba1c>6.5)
{
    $count1=1;
}
else if(($hba1c<=6.4)||($hba1c>=5.7))
{
	    $count1=0.5;
}
if($hba1c<5.7)
{
	    $count1=0;
}
if($rpg>=200)
{
	$count2=1;
}
else if(($rpg>=140)||($rpg<=199))
{
	$count2=0.5;
}
if($rpg<140)
{
	$count2=0;
}
if($fpg>=126)
{
	$count3=1;
}
else if(($fpg>=100)||($fpg<=125))
{
	$count3=0.5;
}
if($fpg<100)
{
	$count3=0;
}
$count=($count1+$count2+$count3)/3;
if($count>=1)
{
		echo "Diabetes is Confirmed";
		echo "<br><br><br>";
		echo "Based on your lab report, it is given that, you have diabetes disease. So please took proper medications to avoid increasing blood glucose level";
		echo "If you are not diagnosed properly, then it will lead to various complications. Take care";

}
if(($count>=0.5)&&($count<0.99))
{
		echo "Impaired Gluco Tolerance";
		echo "<br><br><br>";
		echo "Impaired glucose tolerance (IGT) is a pre-diabetic state of hyperglycemia that is associated with insulin resistance and increased risk of cardiovascular pathology. IGT may precede type 2 diabetes mellitus by many years. IGT is also a risk factor for mortality.";
}
if(($count<=0.5)&&($count>=0))
	{
			echo "Its A Normal";
			echo "<br><br><br>";
			echo "You Need not to worry about Diabetes now. Because you are in a safer zone. So please follow the proper medications to keep your blood sugar in a controlled level";
		}
}
?>
</div>
</div>
<div id="med">
    <a href="Medications.php">  <button type="button" class="btn btn-Primary">Medications</button></a>&nbsp;&nbsp;
    </div>
	<style>
	#med
{
		padding:10px 100px 0px 1000px;
}
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


