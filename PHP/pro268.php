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
        PHP array_push() Function
        Insert "blue" and "yellow" to the end of an array:
    */

        $city = ["Rajkot", "Surat"];
        echo "<hr>";
        print_r($city);

        array_push($city, "Baroda", "Ahamdabad");
        echo "<hr>";
        print_r($city);
    ?>
</body>

</html>