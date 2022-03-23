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
//Connect and select a database
mysql_connect('localhost','root','geeks');
mysql_select_db('test');

//Output headers to make file downloadable
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=spreadsheet.csv');

//Write the output to  buffer
$data = fopen('php://output', 'w');

//Output Column Headings
fputcsv($data,array('Gender','Age','Ethnic','Waist','Blood-Pressure','Thirst','Freq.-Urination','Excessive-Hunger','Weight-Loss','Over-Weight','Weight-Fluctuation','Blurred-Vision','Incr.-Fatigue','Irritatabilty','Freq.-Infection','Itchy-skin','Fam-History','Depression','Sensation','Fruity-odor','Bed-Wet','poor-healing','fam-hist-dur-preg','prev-pregnancy','low-wei-baby-dur-preg'));

//Retrieve the data from database
$rows = mysql_query("SELECT * FROM ".$row);

//Loop through the data to store them inside CSV
while($row = mysql_fetch_assoc($rows)){
	fputcsv($data, $row);
}