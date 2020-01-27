<?php
$hostName = 'localhost:3307';
$userName = 'root';
$password = '';
$databaseName = 'cseb2020';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);    
if ($conn){
    echo 'Connection Successful!';
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>