<?php
    declare(strict_types=1);
?>
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
           Add Array Item : To add items to an existing array, you can use the bracket [] syntax.
        */ 
        
        $city = array("Rajkot", "Surat", "Baroda");
        echo "<hr>";
        print_r($city);

        $city[] = "Ahamdabad"; // add element at end of array
        echo "<hr>";
        print_r($city);
        
    ?>
</body>
</html>