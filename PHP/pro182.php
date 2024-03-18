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
            PHP Functions - Returning values
            To let a function return a value, use the return statement:
        */ 

        function makeSum($ip1, $ip2){
            return $ip1 + $ip2;
        }

        
        echo "<hr> Answer is ".makeSum(111, 222);
    ?>
</body>
</html>