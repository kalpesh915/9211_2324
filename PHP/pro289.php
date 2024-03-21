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
        PHP current() Function : Output the value of the current element in an array:
    */

    $city = ["Rajkot", "Baroda", "Bhuj", "Jamnagar", "Ahamdabad"];

    echo "<hr>Original Array is :<hr>";
    print_r($city);

    echo "<hr>".current($city);
    echo "<hr>".next($city);
    echo "<hr>".end($city);
    echo "<hr>".prev($city);
    echo "<hr>".reset($city);
    
    ?>
</body>

</html>