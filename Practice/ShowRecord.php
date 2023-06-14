<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbparth";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Can't create connection because " . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Age</th>";
        echo "<th>Section</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Section'] . "<td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    mysqli_close($conn);
}
?>