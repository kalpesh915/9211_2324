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
           PHP Conditional Assignment Operators
           The PHP conditional assignment operators are used to set a value depending on conditions:

           Ternary

           Answer = (condition ? True Part : False Part);
        */ 

        $ip1 = 2100;
        $ip2 = 150;

        $ans = ($ip1 > $ip2 ? $ip1 : $ip2);

        echo "<hr> Maximum is $ans <hr>";
        
    ?>
</body>
</html>