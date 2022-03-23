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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://localhost/Project - JARVIS/bootstrap-log/bootstrap.min.css">

<link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text/css'>
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

          Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">  
          <button type="button" class="btn btn-Danger">Sign Out</button></a></div>
</div>
</div>

<div id="body"><br><br><br>
<center>
<h3>Preliminary Questionnaire</h3></center>
<div class="checkout-wrap">
 <ul class="checkout-bar">

    <li class="visited first">
      <a href="#">waist</a>
    </li>
    
    <li class="previous visited">Age</li>
    
    <li class="previous visited">Ethnic Group</li>
  
    <li class="active">Waist Measure</li>
    
    <li class="next">Blood Pressure</li>
       
  </ul>&nbsp;
</div>
<div id="intro">
<?php
if(isset($_POST['waist']))
{
$waist=$_POST['waist'];
$link = mysql_connect("localhost", "root", "geeks");
mysql_select_db("test", $link);
$result=mysql_query("alter table ".$row." add waist varchar(4) NOT NULL",$link);
$insert = mysql_query("update ".$row." set waist=('$waist') where 1=1", $link);
header('Location:http://localhost/Project - JARVIS/Test-4.php');
}    
?>
  <form action="" method="post" name="query">
<div id="waist">
Waist Size:<br><br><br>
<input type="radio" name="waist" value="0" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;Less than 90 cms</span>&nbsp;&nbsp;
    <input type="radio" name="waist" value="1" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;90-99.99 cms</span>&nbsp;&nbsp; 
<input type="radio" name="waist" value="2" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;100-109.9 cms</span>&nbsp;&nbsp;
    <input type="radio" name="waist" value="3" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp; >110 cms</span>
</div>
<style>
#waist
{
font-family:Arial;
padding:20px 100px 100px 10px;
font-size:24px;
}
</style>
</div>
</form>
</body>
</html>
