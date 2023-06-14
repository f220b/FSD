<!DOCTYPE html>
<html>

<body>
    <?php
    $myfile = fopen("webdictionary.txt", "a") or die("Unable to open file!");
    $txt = "Parth Sarthi\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
</body>

</html>