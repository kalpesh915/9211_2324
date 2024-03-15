<?php
    
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
            PHP Logical Operators
            The PHP logical operators are used to combine conditional statements.

            True if either $x or $y is true, but not both

            Condition 1     Condition 2     Answer
            True            False           true
            False           True            true
            False           False           False
            True            True            False
        */ 

        echo "<hr>";
        var_dump(11 > 5 xor 11 > 20);
        echo "<hr>";
        var_dump(11 > 50 xor 11 > 2);
        echo "<hr>";
        var_dump(11 > 50 xor 11 > 20);
        echo "<hr>";
        var_dump(11 > 5 xor 11 > 2);
    
    ?>
</body>
</html>