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

    <li class="previous visited">
      <a href="#">Gender</a>
    </li>
    
    <li class="previous visited">Age</li>
    
    <li class="active">Ethnic Group</li>
    
    <li class="next">Waist Measure</li>
    
    <li class="">Blood Pressure</li>
       
  </ul>
</div>
<div id="intro">
<?php
if(isset($_POST['ethnic']))
{
$ethnic=$_POST['ethnic'];
$link = mysql_connect("localhost", "root", "geeks");
mysql_select_db("test", $link);
$result=mysql_query("alter table ".$row." add ethnic varchar(4) NOT NULL",$link);
$insert = mysql_query("update ".$row." set ethnic=('$ethnic') where 1=1", $link);
header('Location:http://localhost/Project - JARVIS/Test-3.php');
}    
?>
<form action="" method="post" name="query">
<div id="gender">
Ethnic Background:<br><br><br>
<input type="radio" name="ethnic" value="1" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;White European</span>&nbsp;&nbsp;
<input type="radio" name="ethnic" value="0" onclick="javascript: submit()">&nbsp;&nbsp;&nbsp;Other Ethnic Group</span>&nbsp;&nbsp;
</div>
<style>
#gender
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
