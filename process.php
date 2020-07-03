<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	// Get Values passe from form in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];

	//To prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	

	//connect to the server and select database

	mysql_connect("localhost", "root", "");
	mysql_select_db("web");

	//Query the database from user

	$result = mysql_query("select * from admin where username = '$username' and password = '$password'") 
				or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password ) {
		echo "Login succeess!!! Welcome to Admin Panel";?><a href="abc.html">Click Here</a>
<?php
	}else{
		echo "Failed to login!";
	}
?>

</body>
</html>