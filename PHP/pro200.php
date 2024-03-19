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
            Index Number
            The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions. New items get the next index number, meaning one higher than the highest existing index. So if you have an array like this:
        */ 
        
                        
        $students = array("Kenil", "Ridham", "Bhalabhai", "Het");

        echo "<hr>";
        var_dump($students);

        array_push($students, "Sumit");

        echo "<hr>";
        var_dump($students);

        array_push($students, "Dipak", "Jayrajsinh", "Bhavdip");

        echo "<hr>";
        var_dump($students);
    ?>
</body>
</html>