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

<link rel="stylesheet" href="help.css" type="text/css" />

</head>

<body>
	<form action="Diagnosis_Results.php" method="post">


<div id="header">
	<div id="left">
    <label>J.A.R.V.I.S</label>
    </div>
    <div id="right">
    	<div id="content">

        	Welcome, <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">  
        	<button type="button" class="btn btn-Danger">Sign Out</button></a>
        </div>
    </div>
</div>

<div id="body">

	<hr>
	<div id="intro-heading">
		<b><u>FOOD PLAN - CHART</u></b>
</div>
<div id="intro">
	<i>A diabetes meal plan is a guide that tells you how much and what kinds of food you can choose to eat at meals and snack times. A good meal plan should fit in with your schedule and eating habits. </i>
	</div>
	<br><br><br>
	<br>
	<center><b><u>FOOD PLAN - TABLE</u></b></center>
	<br><br><br>
	<div id="tabl">
<table border="1" cellspacing="2" cellpadding="2">
<tr>
	<th><center>DAY</center></th>
<th><center>BREAKFAST</center></th>
<th><center>LUNCH</center></th>
<th><center>AFTERNOON SNACK</center></th>
<th><center>EVENING TIFFEN</center></th>
<th><center>DINNER</center></th>
</tr>
<tr>
<td>MONDAY</td>
<td>1 Cup 1% Milk
<br>1 Orange , medium
<br>1 1/4 Cups Cheerios Cereal</td>
<td>1 1/2 Cups Cantaloupe Melon<br>
	1 Ounce Walnuts
</td>
<td>Lemon Lentil Salad with Salmon<br>
	1 Whole-Wheat Pita Bread, small<br>
1 Cup 1% Milk<br>
1 Fudgsicle, no sugar added<br>
</td>
<td>
	2 Tablespoons Prepared Hummus<br>
4 Ounces Carrot Sticks
</td>
<td>
	3/4 Cup Cooked Brown Rice<br>
1 Cup Steamed Spinach<br>
Chili-Rubbed Steaks & Pan Salsa<br>
Zucchini-Walnut Loaf</td>
</tr>
<tr>

<td>TUESDAY</td>
<td>1 Cup 1% Milk
<br>1 Banana , small
<br>1 1/2 Cups Bran Flakes Cereal</td>
<td>
	1 Fruit & Nut Granola Bar
</td>
<td>Chopped Greek Salad with Chicken<br>
	1 Whole-Wheat Bread<br>
1 Cup 1% Milk
</td>
<td>
	1 Ounce Almonds, salted<br>
2 Tablespoons Raisins</td>
<td>
	Warm Beet & Spinach Salad<br>
	South Pacific Shirmp<br>
	3/4 Cup Cooked Couscous<br>
1 Whole-Wheat Roll
<br>1 Peach, medium
</td>
</tr>
<tr>

<td>WEDNESDAY</td>
<td>1 Cup 1% Milk
<br>1 Whole Grain Out Bran Bagel
<br>1/2 Cup Blueberries
<br>1 Tablespoon Creamy Peanut Butter, unsalted</td>
<td>1 Apple, small
</td>
<td>1 Cup Tossed Salad Mix<br>
	1 Tablespoon Vinegar & Oil Salad Dressing<br>
	Baked Chicken with Onions & Leeks<br>
	1/2 Cup Fresh Pineapple<br>
	2/3 Cup Cooked Brown Rice</td>
<td>
1 Cup Nonfat Vanilla or Lemon Yogurt, Sweetened with Low-Calorie Sweetener
</td>
<td>
	1 Cup Tossed Salad Mix<br>
	4 Teaspoons Vinegar & Oil Salad Dressing<br>
	1 Cup 1% Milk
	<br>Squash, Chickpea & Red Lentil Stew<br>
	1 Nectarine, medium</td>
</tr>
<tr>

<td>THURSDAY</td>
<td>1 Cup 1% Milk
<br>1 Kiwi
<br>1 Cup Whole Grain Flakes Cereal</td>
<td>1/2 Ounce Waluts<br>
	1 Ounce Dried Fruit
</td>
<td>1 Cup Tossed Salad Mix<br>
	Talapia Corn Chowder<br>
	4 Teaspoons Vinegar & Oil Salad Dressing<br>
	1 Ounce Oyster Crackers<br>
	1 Cup Honeydew Melon</td>
<td>
	1 Cup Blackberries<br>
1 Cup 1% Milk
</td>
<td>
	1 Cup Cooked Brown Rice<br>
	Chicken Breasts with Mushroom Cream Sauce<br>
	1/2 Cup Steamed Asparagus<br>
	Broiled Mango</td>
</tr>
<tr>

<td>FRIDAY</td>
<td>1 Cup 1% Milk
<br>1 Scrambled Eggs
<br>2 Slices Oatmeal Bread
<br>1 Cup Grapefruit</td>
<td>1 Cup Raspberries<br>
1 Ounce Whole-Wheat Pretzel
</td>
<td>1 Cup Tossed Salat Mix<br>
	1 Tablespoon Vinegar & Oil Salad Dressing<br>
	<br>Sweet Potato-Turkey Hash<br>
	3 Gingersnap Cookies
1 Cup 1% Milk<br>
</td>
<td>
	6 Ounces Nonfat Vanilla<br>
1/4 Cup Alphen Cereal
</td>
<td>
	1 Cup Cooked Quinoa<br>
3/4 Cup Cooked Carrots,Sliced<br>
Apple & Fennel Roasted Pork Tenderloin<br>
1 Cup Strawberries</td>
</tr>
<tr>

<td>SATURDAY</td>
<td>1 Cup 1% Milk<br>
1 Whole-Wheat English Muffin<br>
1 Tablespoon Creamy Peanut Butter<br>
1 Tablespoon Sugar-Free Jam
</td>
<td>1 Orange, medium<br>
1 Fruit & Nut Granola Bar
</td>
<td>
	1 1/2 Ounces Low Fat Cheddar Cheese<bt>
Southwestern Rice & Pinto Bean Salad<br>
1 Whole-Wheat Pita Bread, small<br>
Citrus-Infused Strawberries
</td>
<td>
	8 Ounces Nonfat Vanilla or Lemon Yogurt, <br>Sweetened with Low-Calorie Sweetener
1 Cup Watermelon</td>
<td>
1 Whole-Wheat Roll<br>
Pacific Sole with Oranges & Pecans<br>
3/4 Cup Cooked Brown Rice<br>
1 Cup Steamed Cauliflower<br>
1 Cup Grapes
	</td>
</tr>
<tr>

<td>SUNDAY</td>
<td>1 Cup 1% Milk
<br>1 Plum
<br>Quick Breakfast Taco</td>
<td>Zucchini-Walnut Loaf
</td>
<td>1 Veggie Burger<br>
1 Whole-Wheat Roll<br>
1 Cup Prepared Coleslaw<br>
1 Pear, medium<br>
</td>
<td>
	6 Ounces Carrot Sticks<br>
Roasted Eggplant & Feta Dip
</td>
<td>
	1 Cup 1% Milk<br>
1 Peach, medium<br>
2 Cups Tossed Salad Mix<br>
2 Tablespoons Vinegar & Oil Salad Dressing<br>
Seared Scallops with Brandied Leeks & Mushrooms<br>
2/3 Cup Cooked Brown Rice
	</td>
</tr>
</table>
</div>
<hr>
<br>
<br>
<br><br>
	<b><h3><u><center>Exercises and Procedures:</center></u></h3></b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<div id="exer">

	<ol type="circle">
		<li> Walk Daily for minimum of 1 hr.</li><br>
		<li> Drink 6 ltr of water daily.</li><br>
		<li> Take an apple daily</li><br>
		<li> Don't take stress over running</li><br>
	</ol>
	</div>
	<hr>
<style>
#tabl
{
	font-size:7px;
}
#exer
{
	padding:100px 100px 100px 300px;
}
</form>
</body>
</html>