<?php

$servername = "localhost";
$username = "root";
$password = "";

//Creating a connection
$conn = mysqli_connect($servername, $username, $password);

//Creating a Database
$sql = "CREATE DATABASE dbparth";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "DB is created SUCCESSFULLY";
} else {
    echo "Database can't be created because " . mysqli_error($conn);
}
?>