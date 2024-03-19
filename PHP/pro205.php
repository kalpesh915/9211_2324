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
        
                        
        $student = array("roll" => 1, "fname" => "Het", "lname" => "Dadhaniya", "city" => "Rajkot", "gender" => "Male");

        foreach($student as $key => $value){
            echo "<hr> $key is $value";
        }
    ?>
</body>
</html>