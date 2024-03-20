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
            Remove the Last Item
        */ 

        $cars = array("Mahindra", "Suzuki", "Toyota", "Hyundai", "Tata");

        echo "<hr> Original Array is <hr> ";
        print_r($cars);

        array_pop($cars);
        array_pop($cars);

        echo "<hr> New Array is <hr> ";
        print_r($cars);
    ?>
</body>
</html>