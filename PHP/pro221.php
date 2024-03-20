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
            Remove Array Item
            To remove an existing item from an array, you can use the array_splice() function.
            With the array_splice() function you specify the index (where to start) and how many items you want to delete.
        */ 

        $city = array("Surat", "Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Bhavanagar", "Jamanagar", "Morbi");

        echo "<hr> Original Array is <hr> ";
        print_r($city);

        array_splice($city, 1, 2);

        echo "<hr> New Array is <hr> ";
        print_r($city);
    ?>
</body>
</html>