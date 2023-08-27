<?php
$user_name =$_POST["user_name"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO student(name) VALUES('{$user_name}')";
if(mysqli_query($conn, $sql)){
    echo 1;
}
else{
    echo 0;
}
?>