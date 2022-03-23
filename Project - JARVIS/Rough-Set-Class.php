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
        </div>
    </div>
</div>

<div id="body">
	<div id="top-1" align="right">
		<a href="home.php">  <button type="button" class="btn btn-default">Home</button></a>&nbsp;&nbsp;
		<a href="Instructions.php">  <button type="button" class="btn btn-default">Instructions</button></a>&nbsp;&nbsp;
		<a href="lets-start.php" >  <button type="button" class="btn btn-default">Start your Test</button></a>&nbsp;&nbsp;
		<a href="About-Us.php">  <button type="button" class="btn btn-default">About-Us</button></a>

	</div>
	<hr>
	<div id="intro-heading">
Result:-
	</div>
<div id="intro">
	 <?php
{
$link = mysql_connect("localhost", "root", "geeks");
mysql_select_db("test", $link);
$res1 = mysql_query("select q1 from ".$row);
$row1 = mysql_fetch_array($res1);
$result1= $row1['q1'];
$res2 = mysql_query("select q2 from ".$row);
$row2 = mysql_fetch_array($res2);
$result2= $row2['q2'];
$res3 = mysql_query("select q3 from ".$row);
$row3 = mysql_fetch_array($res3);
$result3= $row3['q3'];
$res4 = mysql_query("select q4 from ".$row);
$row4 = mysql_fetch_array($res4);
$result4= $row4['q4'];
$res5 = mysql_query("select q5 from ".$row);
$row5 = mysql_fetch_array($res5);
$result5= $row5['q5'];
$res6 = mysql_query("select q6 from ".$row);
$row6 = mysql_fetch_array($res6);
$result6= $row6['q6'];
$res7 = mysql_query("select q7 from ".$row);
$row7 = mysql_fetch_array($res7);
$result7= $row7['q7'];
$res8 = mysql_query("select q8 from ".$row);
$row8 = mysql_fetch_array($res8);
$result8= $row8['q8'];
$res9 = mysql_query("select q9 from ".$row);
$row9 = mysql_fetch_array($res9);
$result9= $row9['q9'];
$res10 = mysql_query("select q10 from ".$row);
$row10 = mysql_fetch_array($res10);
$result10= $row10['q10'];
$res11 = mysql_query("select q11 from ".$row);
$row11 = mysql_fetch_array($res11);
$result11= $row11['q11'];
$res12 = mysql_query("select q12 from ".$row);
$row12 = mysql_fetch_array($res12);
$result12= $row12['q12'];
$res13 = mysql_query("select q13 from ".$row);
$row13 = mysql_fetch_array($res13);
$result13= $row13['q13'];
$res14 = mysql_query("select q14 from ".$row);
$row14 = mysql_fetch_array($res14);
$result14= $row14['q14'];
$res15 = mysql_query("select q15 from ".$row);
$row15 = mysql_fetch_array($res15);
$result15= $row15['q15'];
$res16 = mysql_query("select q16 from ".$row);
$row16 = mysql_fetch_array($res16);
$result16= $row16['q16'];
$res17 = mysql_query("select q17 from ".$row);
$row17 = mysql_fetch_array($res17);
$result17= $row17['q17'];
$res18 = mysql_query("select q18 from ".$row);
$row18 = mysql_fetch_array($res18);
$result18= $row18['q18'];
$res19 = mysql_query("select q19 from ".$row);
$row19 = mysql_fetch_array($res19);
$result19= $row19['q19'];
$res20 = mysql_query("select q20 from ".$row);
$row20 = mysql_fetch_array($res20);
$result20= $row20['q20'];
$set1=$result1+$result2+$result3+$result4+$result8+$result15+$result16;
$set2=$result1+$result2+$result3+$result5+$result6+$result7+$result8+$result9+$result10+$result17;
$set3=$result1+$result2+$result3+$result5+$result7+$result9+$result10+$result11+$result12+$result13+$result14;
$set4=$result5+$result18+$result19+$result20;

if(($set1>$set2)&&($set1>$set3)&&($set1>$set4))
{
	header('Location:http://localhost/Project - JARVIS/Type-1.php');
}
else if(($set2>$set3)&&($set2>$set4))
{
	header('Location:http://localhost/Project - JARVIS/Type-2.php');
}
else if($set3>$set4)
{
	header('Location:http://localhost/Project - JARVIS/Other-Types.php');

}
else {
	header('Location:http://localhost/Project - JARVIS/Gestational-Diabetes.php');
}
}    
?>
<form action="" method="post" name="query">
<div>
<p id="demo">
</div>
</div>
</body>
</html>

