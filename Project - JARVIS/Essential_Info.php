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
<link rel="stylesheet" href="style-for-radio.css" type="text/css" />
 
<script type="text/javascript">
 
function checkValue() 
{
     var form = document.getElementById('gen'); 
     for(var i = 0; i < form.gen.length; i++)
     {
          if(form.gen[i].checked)
          {
          var selectedValue = form.gen[i].value;
          }
 
     }
 
 
     alert(selectedValue);
     return false;
}

 
</script>
</head>
<body>
<form id="gen" method="post" action="" onSubmit="return checkValue();" >
	<div id="header">

	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">
        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>

<div id="body">
	<div id="top-1" align="right">
		<button><a href="home.php">Home</button>&nbsp;&nbsp;
		<button><a href="Instructions.php">Instructions</a></button>&nbsp;&nbsp;
		<button>Start Your Test</button>&nbsp;&nbsp;
		<button><a href="About-Us.php">About - Us</a></button>&nbsp;&nbsp;
</div>
	<hr>
	<div id="intro-heading">
		BASIC QUESTIONNAIRE:-
		</div>
<div id="intro">

		<div id="essential">
			<table border="0">
				<tr>
				<th>
			<h3>Step-1: About Your Personal Information:</h3></th></tr>
			<tr>
				<td>1.Select Your Gender:</td>
				<td><input type="radio" id="1" value="1" name="gen"></td><td>Male</td>
								<td><input type="radio" id="2" value="2" name="gen"></td><td>Female</td></tr>
								<tr>
								<td>2.Enter your Age(Approximate value):</td>
								<td><input type="text" name="age"></td>
								</tr>
								<tr><td>3.Enter your Waist Measure:</td>
								<td><input type="text" name="waist"></td>
							</tr>
						</table>
						<div id="nav">
<input type="submit" value="submit"></div>
							</div>
</div>
<div id="nav">

	</div>
</div>
</form>
</body>
</html>



