<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbparth";

//Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "CREATE TABLE `dbparth`.`students` (`RollNo` INT(7) NOT NULL , `Name` VARCHAR(20) NOT NULL , `Age` INT(2) NOT NULL , `Marks` INT(3) NOT NULL , PRIMARY KEY (`RollNo`))";
$result = mysqli_query($conn, $sql);

?>