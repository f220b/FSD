<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbparth";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "No. of Rows " . $num . "<br>";

if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        //mysqli_fetch_assoc() fetches one row of the table and returns as associative array
        echo $row['RollNo'] . ".    " . $row['Name'] . " got " . $row['Marks'] . " marks.<br>";
    }
}
?>