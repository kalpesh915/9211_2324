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
            Array items can be of any data type. The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays. You can have different data types in the same array.
        */ 
        
        function greetings(){
            echo "<hr> Good Day<hr>";
        }

        $students = array("Kenil", "Sangani", "Male", "Rajkot", false, 1234.5678, ["Gujarati", "Hindi", "English"], 2007, "greetings");

        $students[8]();

    ?>
</body>
</html>