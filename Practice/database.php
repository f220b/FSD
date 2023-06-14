<?php
if (isset($_POST['submit'])) {
    $sname = $_POST['name'];
    $syear = $_POST['yr'];
    $ssec = $_POST['sec'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbparth";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO students VALUES ('$sname', '$syear', '$ssec')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Record Inserted Successfully";
    } else {
        echo "Record can't be inserted because " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Data could not be inserted";
}
?>