<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body>
	<center><h1>Adi-Ajinkya Caterers</h1></center>
	<div id="frm">
		<form action="process.php" method="POST">
			<h2>Admin Login Only!!!</h2>
			<p>
				<label>UserName:</label>
				<input type="text" id="user" name="user">
			</p>
			<p>
				<label>Password:</label>
				<input type="Password" id="pass" name="pass">
			</p>
			<p>
				<input type="submit" id="btn" value="LogIn">
			</p>
		</form>
	</div>

</body>
</html>