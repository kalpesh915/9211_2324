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
        PHP in_array() Function
        Search for the value "Glenn" in an array and output some text:
    */

    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    if (in_array("Joe", $people)) {
        echo "Match found";
    } else {
        echo "Match not found";
    }

    ?>
</body>

</html>