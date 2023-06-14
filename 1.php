<!DOCTYPE html>
<html>
<title>This is my HTML</title>

<body>
    <h1>PHP</h1>
    <?php
    $str = "Parth";
    $s = 25.5;
    //Change lines using <br/>
    echo "String is $str<br/>";
    echo "String is $str";
    echo "$s<br/>$s";
    echo "$s";
    $z = $s * 2;
    echo "<br/>$z";
    if ($s > 30) {
        echo "<br/>Yes";
    } else if ($s > 20) {
        echo "<br/>Maybe";
    } else {
        echo "<br/>No";
    }
    switch ($s) {
        case 25.5:
            echo "<br/>OK<br/>";
            break;
        case 23:
            echo "<br/>No<br/>";
            break;
    }
    $fruits = array("Orange", "Apple", "Banana", "Watermelon"); //Numeric Array
    echo count($fruits) . "<br/>";      //Length of an Array
    $i = 0;
    foreach ($fruits as $value) {
        //Prints until i=3
        echo "$value    ";
        if (++$i == 3)
            break;
    }
    echo "<br/>";
    foreach ($fruits as $value) {
        //Prints the whole array
        echo "$value    ";
    }
    sort($fruits);
    echo "<br/>";                      //Sorts in Ascending Order
    foreach ($fruits as $value) {
        echo "$value    ";
    }
    rsort($fruits);
    echo "<br/>";                      //Sorts in Descending Order
    foreach ($fruits as $value) {
        echo "$value    ";
    }
    echo "<br/>";
    for ($i = 0; $i < count($fruits); $i++) {
        echo $fruits[$i]."    ";
    }
    $salaries = array("Parth" => 50000, "Ashish" => 30000); //Associative Array
    echo $salaries["Parth"] . "<br/>";
    foreach ($salaries as $x => $x_value) {
        echo $x . " earns Rs." . $x_value . "<br/>";
    }
    //Multi-Dimensional Array
    $marks = array(
        "Parth" => array(
            "Physics" => 35,
            "Maths" => 30,
            "Chemistry" => 39
        ),
        "Ashish" => array(
            "Physics" => 30,
            "Maths" => 32,
            "Chemistry" => 29
        ),
        "Ujwal" => array(
            "Physics" => 31,
            "Maths" => 22,
            "Chemistry" => 39
        )
    );
    echo $marks["Ashish"]["Physics"];
    ?>
</body>

</html>