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

<div id="body">
  <br><br><br>
<center>
<h3>Preliminary Questionnaire</h3></center>
<div class="checkout-wrap">
  <ul class="checkout-bar">
    <li class="visited first">
      <a href="#">bp</a>
    </li>
    
    <li class="previous visited">Age</li>
    
    <li class="previous visited">Ethnic Group</li>
    
    <li class="previous visited">Waist Measure</li>
    
    <li class="active">Blood Pressure</li>
       
  </ul>
</div>
<div id="intro">
<?php
if(isset($_POST['bp']))
{
$bp=$_POST['bp'];
$link = mysql_connect("localhost", "root", "geeks");
mysql_select_db("test", $link);
$result=mysql_query("alter table ".$row." add bp varchar(4) NOT NULL",$link);
$insert = mysql_query("update ".$row." set bp=('$bp') where 1=1", $link);
header('Location:http://localhost/Project - JARVIS/bmicalcs.php');
}    
?>
  <form action="" method="post" name="query">
<div id="bp">
Do you have Blood Pressure:<br><br><br><span id="gen">
<input type="radio" name="bp" value="1" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;
  <span id="ge"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="bp" value="0" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;No</span>
</div>
<style>
#bp
{
font-family:Arial;
padding:120px 100px 100px 100px;
font-size:24px;
}
</style>
</div>
</form>
</body>
</html>
