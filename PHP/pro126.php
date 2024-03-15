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

            logical and, &&
            both conditions must be true

            Condition 1     Condition 2     Answer
            True            False           False
            False           True            False
            False           False           False
            True            True            True
        */ 

        echo "<hr>";
        var_dump(11 > 5 and 11 > 20);
        echo "<hr>";
        var_dump(11 > 50 and 11 > 2);
        echo "<hr>";
        var_dump(11 > 50 and 11 > 20);
        echo "<hr>";
        var_dump(11 > 5 and 11 > 2);
        echo "<hr>";
        var_dump((11 > 5) && (11 > 2));
    ?>
</body>
</html>