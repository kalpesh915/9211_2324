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
            PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.     
            
            To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.
        */ 
        
        function makeDiv(int $ip1, int $ip2) : int{
            //return ($ip1 / $ip2);
            return (int) ($ip1 / $ip2);
        }
        
        echo "<hr>".makeDiv(1112, 22);
        echo "<hr>".makeDiv(111, 33);
        echo "<hr>".makeDiv(11, 6);
    ?>
</body>
</html>