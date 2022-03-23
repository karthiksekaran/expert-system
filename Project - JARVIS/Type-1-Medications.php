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
	TYPE -1 MEDICATIONS
	</div>
<div id="intro">
Type 1 diabetes, once called juvenile diabetes, is normally present from childhood. Lacking proper insulin can cause people with this type of diabetes to experience unbalanced blood glucose levels. According to the Mayo Clinic, healthy blood glucose levels range from 70 to 130 milligrams per deciliter (mg/dL) before meals. Since the body has problems processing glucose, medications are needed to compensate for the lack of insulin.
<br>
<br>
<b>Insulin</b><br><br>
<i>Insulin is the most common type of medication used in type 1 diabetes treatment. It is mostly administered through injections. Insulin is also used in type 2. The type of insulin you need depends on the severity of insulin depletion. Options include:
short-acting: regular (R) (Humulin, Novolin, and other brands)
rapid-acting: insulin aspart (NovoLog, FlexPen), insulin glulisine (Apidra), insulin lispro (Humalog)
intermediate-acting: insulin isophane (Humulin, Novolin, Iletin)
long-acting: insulin detemir (Levemir), insulin glargine (Lantus)
</i>
<br><br>
<b>Amylinomimetic</b><br><br>
	<i>
Pramlintide (SymlinPen 120, SymlinPen 60) delays the time it takes the stomach to empty. It reduces glucagon secretion after meals and reduces appetite through a central mechanism.  It is used before meals. 
Other Medicines
Other recommended treatments may include:

aspirin for heart health
cholesterol-lowering medication
high blood pressure medication
</i>
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


