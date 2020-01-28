<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0)
{
	while($data = $result->fetch_assoc())
	{
	echo 'id - '.$data['id'].'<br>';
	echo 'Name - '.$data['name'].'<br>';
	echo 'Age - '.$data['age'].'<br>';
	echo 'Contact - '.$data['contact'].'<br>';
	echo 'Email - '.$data['email'].'<br>';
}

}
?>