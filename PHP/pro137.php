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
            PHP - The if Statement
            The if statement executes some code if one condition is true.
            Syntax

            check character is vowel or not (aeiou)
        */ 

        $ip1 = 'A';
        if($ip1 == 'a' || $ip1 == 'e' || $ip1 == 'i' || $ip1 == 'o' || $ip1 == 'u' || $ip1 == 'A' ||
        $ip1 == 'E' || $ip1 == 'I' || $ip1 == 'O' || $ip1 == 'U'){
            echo "<hr> Character is vowel";
        }
        echo "<hr> Program Completed";
    ?>
</body>
</html>