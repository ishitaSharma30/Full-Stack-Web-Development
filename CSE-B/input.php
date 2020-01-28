<?php
include('config.php');
?>
<html>
	<head>
	<title>Input From</title>
	</head>

	<body>
	<form action="addRecord.php" method="post">
		Name: <input type="text" name="username"><br>
		Age:<input type="text" name="age" placeholder="Enter Age"><br>
		Contact:<input type="text" name="contact" placeholder="Enter contact"><br> 
		Email:<input type="text" name="email" placeholder="Enter email"><br>
		<input type="submit" name='btn'>
		</form>
		</body>
	</html> 