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
	<div id="intro-heading">Personal Information:-
		</div>
<div id="intro">
	Enter Your Age:<input type="text" name="age" onclick="javascript: submit()">
<form action="" method="post" name="query">
<div>
	<p id="demo">
		<br><center>
<input type="button" value="Submit your Details" onclick="javascript: submit()"></center>
</div>
</div>

</body>

</html>

