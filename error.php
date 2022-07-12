<html>
	<head>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
	<center>
	<h1>LOGIN</h1>
		<form action="validate.php" method="POST">
			Enter username&nbsp;<input type="text" name="username" value=""><br><br>
			Enter password&nbsp;<input type="password" name="password" value=""><br><br>
			<input type="submit" name="sb" value="login"/>
			<input type="reset" name="reset" value="reset"/><br><br>
			<span style="color: black; font-size=40px;"><?php session_start(); echo "Hello ".$_SESSION['uname']." Enter valid details ";?></span>
		</form>
	</center>
</body>
</html>