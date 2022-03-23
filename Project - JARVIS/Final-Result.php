<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$val=$userRow['username'];

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
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
			<div id="top-left" align="left">
<a href="flow-map.php"><button>Check your Process Flow</button></a>
</div>
	<hr>
	&nbsp;&nbsp;<b><h3><div id="jarvis">J.A.R.V.I.S Expert System</div></h3></b>
	<div id="intro-heading">
		FINAL REPORT
</div>
<?php
{
$link = mysql_connect("localhost", "root", "geeks");
mysql_select_db("test", $link);
$curr=0;
$result = mysql_query("select * from {$val}" ,$link);
if (!$result) {
die("Query to show fields from table failed");
}
while($row = mysql_fetch_row($result))
{
    foreach($row as $cell)
    $curr=$curr+$cell;
	$i=1;
    echo "Average Score:$curr";
    echo "<br>";
    $i++;
}
if($curr>10)
{
	echo "Should Take Diagnosis";
}
else
{
	echo "Not Needed";
}
mysql_free_result($result);
}
?>

</div>
<div id="downloadreport">
	Click Here To Download Report:
	<a href="csvfile.php"><button>Download Copy</button></a>
</div>
<style type="text/css">
#top-left
{
	margin:-40px 10px 10px 10px;
}
#jarvis
{
padding:20px 10px 10px 100px;
}
#downloadreport
{
padding:300px 40px 40px 900px;
}
</style>
</body>
</html>