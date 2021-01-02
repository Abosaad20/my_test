<?php
session_start();
echo $_SESSION['username'];

?>



<!DOCTYPE html>
<html>
<head>
	<title>Add Balance</title>
</head>
<body>
	<form method="POST" action="add_balance.php">
	<input type="card" name="cardinfo" placeholder="Please Enter Card here">
	<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>