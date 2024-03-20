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
            Remove Item From an Associative Array
            To remove items from an associative array, you can use the unset() function. Specify the key of the item you want to delete.
        */ 

        $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);

        echo "<hr> Original Array is <hr> ";
        print_r($cars);

        unset($cars["model"]);

        echo "<hr> New Array is <hr> ";
        print_r($cars);
    ?>
</body>
</html>