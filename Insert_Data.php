<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbparth";

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "INSERT INTO `students` (`RollNo`, `Name`, `Age`, `Marks`) VALUES ('3', 'Puru', '21', '99')";
$result = mysqli_query($conn, $sql);
?>