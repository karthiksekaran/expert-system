<?php
$hba1c=$_POST['HbA1c'];
$rpg=$_POST['RPG'];
$fpg=$_POST['FPG'];
$count1=0;
$count2=0;
$count3=0;
$count=0;
{
if($hba1c>6.5)
{
    $count1=1;
}
else if(($hba1c<=6.4)||($hba1c>=5.7))
{
	    $count1=0.5;
}
if($hba1c<5.7)
{
	    $count1=0;
}
if($rpg>=200)
{
	$count2=1;
}
else if(($rpg>=140)||($rpg<=199))
{
	$count2=0.5;
}
if($rpg<140)
{
	$count2=0;
}
if($fpg>=126)
{
	$count3=1;
}
else if(($fpg>=100)||($fpg<=125))
{
	$count3=0.5;
}
if($fpg<100)
{
	$count3=0;
}
$count=($count1+$count2+$count3)/3;
if($count>=1)
{
		echo "Diabetes is Confirmed";
}
if(($count>=0.5)&&($count<0.99))
{
		echo "Impaired Gluco Tolerance";
}
if(($count<=0.5)&&($count>=0))
	{
			echo "Its A Normal";
		}
}