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
            Using the unset Function
            You can also use the unset() function to delete existing array items.
            Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
        */ 

        $city = array("Surat", "Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Bhavanagar", "Jamanagar", "Morbi");

        echo "<hr> Original Array is <hr> ";
        print_r($city);

        //unset($city[2], $city[3], $city[4]);
        array_splice($city, 1, 3);
        echo "<hr> New Array is <hr> ";
        print_r($city);
    ?>
</body>
</html>