<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
        PHP list() Function
        Assign variables as if they were an array:
    */

    $people = array("Peter", "Joe", "Glenn", "Cleveland", "Sunil");
    list($a, $b, $c, $d, $e) = $people;
    echo "<hr>Welcome $a";
    echo "<hr>Welcome $b";
    echo "<hr>Welcome $c";
    echo "<hr>Welcome $d";
    echo "<hr>Welcome $e";
    ?>
</body>

</html>