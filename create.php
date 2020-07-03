<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
mysql_connect("localhost","root","");
mysql_select_db("web");

	$drink = $_POST["drink"];
	$vege = $_POST["vege"];
	$salad = $_POST["salad"];
	$sweet = $_POST["sweet"];
	$roti = $_POST["roti"];
	$snacks = $_POST["snacks"];
	$rice = $_POST["rice"];
	$fname = $_POST["fname"];
	$mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$date = $_POST["date"];
	$mob = $_POST["mob"];
	$email = $_POST["email"];
	$venue = $_POST["venue"];

	$sql = "insert into user_order(drink,vege,salad,sweet,roti,snacks,rice,fname,mname,lname,date,mob,email,venue) values('$drink','$vege','$salad','$sweet','$roti','$snacks','$rice','$fname','$mname','$lname','$date','$mob','$email','$venue')";

mysql_query($sql);
echo "save"?>;<a href="index.html">Go TO Home</a>

</body>
</html>