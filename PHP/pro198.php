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
            PHP Indexed Arrays
            In indexed arrays each item has an index number. By default, the first item has index 0, the second item has item 1, etc.
        */ 
        
                        //  0           1       2       3           4       5       6 
        $students = array("Kenil", "Sangani", "Male", "Rajkot", false, 1234.5678, 2007);

        echo "<hr>".$students[0];
        $students[0] = "KENIL";
        echo "<hr>".$students[0];

    ?>
</body>
</html>