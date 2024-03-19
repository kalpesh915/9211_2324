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
           Associative Arrays : To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
        */ 
        
        $student = array("Kenil", "Bhalabahi", "Ridham");
        echo "<hr>";
        print_r($student);

        array_push($student, "Het", "Dipak");
        echo "<hr>";
        print_r($student);
    ?>
</body>
</html>