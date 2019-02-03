<html>
<head>
	<title>php</title>
</head>
<body>
	<p>php program</p>
	<form action="insert.php" method="post">
		name:<input type="text" name="Name">
		<br/>
		Phone:<input type="text" name="phn">
		<br/>
		email:<input type="text" name="Email">
		<br/>
		<input type="submit">
		<input type="reset">
	</form>
	<form action="view.php">
		<input type="submit" value="view">
	</form>
	<form action="update.php">
		<input type="submit" value="update">
	</form>
</body>
</html>