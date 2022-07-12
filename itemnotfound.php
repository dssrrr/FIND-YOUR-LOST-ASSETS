<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
	<center>
		<form action='' method='POST'>
			Enter item id&nbsp;<input type='text' name='id' value=''><br><br>
			<input type='submit' name='sb' value='delete'/>
			<input type='reset' name='reset' value='reset'/><br><br>
			<span style="color: balck; font-size=40px;"><?php echo "There is no such item with the entered item id"; ?></span>
		</form>
	</center>
</body>
</html>