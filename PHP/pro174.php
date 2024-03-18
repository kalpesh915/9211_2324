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
            BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:
        */ 

        $city = ["Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Surat"];

        echo "<hr> Original Array is <hr>";
        print_r($city);
        echo "<hr>";

        foreach($city as &$x){
            $x .= " City";
            echo " $x";
        }

        echo "<hr> Array After loop <hr>";
        print_r($city);

    ?>
</body>
</html>