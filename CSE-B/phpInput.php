<?php
include('config.php');
?>
<?php
if (isset($_POST['btn']))
{
echo "Dear, ".$_POST['username']." your details are".'<br>';	
echo $_POST['ID'].'<br>';
echo $_POST['name'].'<br>';
echo $_POST['age'].'<br>';
echo $_POST['contact'].'<br>';
echo $_POST['email'].'<br>';
}
?>
<html>
	<head>
	<title>Input From</title>
	</head>

	<body>
	<form action="phpInput.php" method="post">
		ID: <input name="id", type="text"
		placeholder="Enter ID"><br>
		Name: <input type="text" name="username"><br>
		Age:<input type="text" name="age"
		placeholder="Enter Age"><br>
		Contact:<input type="text" name="contact"
		placeholder="Enter contact"><br> 
		email:<input type="text" name="email"
		placeholder="Enter email"><br>
		<input type="submit" name='btn'>
		</form>
		</body>
	</html> 