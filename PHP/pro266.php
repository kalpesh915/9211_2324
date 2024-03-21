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
        PHP array_shift() Function
        Delete the first element of an array:
    */

        $city = ["Rajkot", "Baroda", "Bhuj", "Ahamdabad","Surat"];
        echo "<hr>";
        print_r($city);
        array_shift($city);
        echo "<hr>";
        print_r($city);
        array_shift($city);
        echo "<hr>";
        print_r($city);
    ?>
</body>

</html>