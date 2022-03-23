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
	TYPE -2 MEDICATIONS
	</div>
<div id="intro">
Type 2 diabetes happens when the body becomes resistant to insulin. Although the exact cause is unknown, it’s thought that both genetics and environmental factors, such as being overweight, may be risks.

In type 2, over time, the pancreas may no longer make insulin, and the body might become resistant to it altogether. For this reason, insulin injections can play a role in type 2 treatment as well. However, there are other types of medications often recommended only for type 2.

Alpha-Glucosidase Inhibitors
These medications help lower blood glucose by assisting the body with breaking down starchy foods and table sugar. For the best results, they’re taken before meals. Options include:

acarbose (Precose)
miglitol (Glyset)
Biguanides
Biguanides decrease glucose production in the liver. They decrease intestinal glucose absorption and increase insulin sensitivity. They also help muscles absorb glucose. The most common biguanide is metformin (Glucophage, Metformin Hydrochloride ER, Glumetza, Riomet, Fortamet).

Metformin can also be combined into a single medication with other type 2 medication types. It is included as an ingredient in:
<pre>
metformin-alogliptin (Kazano)
metformin-canagliflozin (Invokamet)
metformin-glipizide
metformin-glyburide (Glucovance)
metformin-linagliptin (Jentadueto)
metformin-pioglitazone (Actoplus)
metformin-repaglinide (PrandiMet)
metformin-rosiglitazone (Avandamet)
metformin-saxagliptin (Kombiglyze XR)
metformin-sitagliptin (Janumet)
glyburide-metformin (Glucovance)
</pre>
Dopamine Agonist
Action in diabetes is unknown, but bromocriptine (Parlodel) may affect circadian rhythms and affect obesity and insulin resistance. 

DPP-4 Inhibitors
DPP-4 inhibitors help the body preserve insulin production. They work by reducing blood glucose without causing hypoglycemia. These can also help the pancreas make more insulin. Options include:

alogliptin (Nesina)
alogliptin and pioglitazone (Oseni)
linagliptin (Tradjenta)
saxagliptin (Onglyza)
sitagliptin (Januvia)
sitagliptin and simvastatin
Glucagon-Like Peptides
These are similar to the natural hormone incretin. They increase insulin secretion and decrease glucagon secretion. They also increase B-cell growth, slow stomach emptying, and reduce appetite. Options include:

albiglutide (Tanzeum)
dulaglutide (Trulicity)
exenatide (Byetta)
liraglutide (Victoza)
Meglitinides
These medications stimulate insulin release. Unlike DPP-4 inhibitors, however, meglitinides may lower blood sugar. They are taken three times a day before meals. Options include: nateglinide (Starlix) and repaglinide (Prandin).

SGLT2 Inhibitors
Sodium glucose transporter (SGLT) 2 inhibitors work by preventing the kidneys from holding onto glucose. Instead, SGLT2 promotes excretion through the urine. The forms of this medicine available are:

dapagliflozin (Farxiga)
canagliflozin (Invokana)
empagliflozin (Jardiance) 
Sulfonylureas
These are among the oldest diabetes medications still used today. They work by stimulating the pancreas with the help of beta cells. In turn, more insulin is produced. Sulfonylureas come in the form of:

glimepiride (Amaryl)
glimepiride and pioglitazone (Duetact)
glimeperide and rosiglitazone (Avandaryl)
gliclazide
glipiZIDE (Glucotrol)
glyBURIDE (DiaBeta, Glynase, Micronase)
chlorproPAMIDE (Diabinese)
TOLAZamide (Tolinase)
TOLBUTamide (Orinase, Tol-Tab)
Thiazolidinediones
These medications work by decreasing glucose in the liver, while also promoting insulin efficacy in fat cells. Doctors prescribe them with caution because of an increased risk for heart disease. They are sold as rosiglitazone (Avandia) and pioglitazone (Actos). The latter is also associated with increased risk of bladder cancer.
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


