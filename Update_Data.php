<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbparth";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "UPDATE `students` SET `Name` = 'Ashish Upadhyay' WHERE `students`.`RollNo` = 2";
$result = mysqli_query($conn, $sql);
?>