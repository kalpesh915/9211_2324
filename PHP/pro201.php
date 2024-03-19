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
            PHP Associative Arrays
            Associative arrays are arrays that use named keys that you assign to them.

            data storage format key => value
        */ 
        
                        
        $students = array("roll" => 1, "fname" => "Het", "lname" => "Dadhaniya", "city" => "Rajkot", "gender" => "Male");

        echo "<hr>";
        var_dump($students);

    ?>
</body>
</html>