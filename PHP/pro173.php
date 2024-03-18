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
            Foreach Byref
            When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
        */ 

        $city = ["Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Surat"];

        echo "<hr> Original Array is <hr>";
        print_r($city);
        echo "<hr>";

        foreach($city as $x){
            $x .= " City";
            echo " $x";
        }

        echo "<hr> Array After loop <hr>";
        print_r($city);

    ?>
</body>
</html>