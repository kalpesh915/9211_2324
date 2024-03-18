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
            Variable Number of Arguments
            By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.
            The variadic function argument becomes an array.
        */ 

        function makeSum2($ip1, $ip2){
            return $ip1 + $ip2;
        }

        function makeSum3($ip1, $ip2, $ip3){
            return $ip1 + $ip2 + $ip3;
        }

        function makeSum4($ip1, $ip2, $ip3, $ip4){
            return $ip1 + $ip2 + $ip3 + $ip4;
        }

        function makeSum5($ip1, $ip2, $ip3, $ip4, $ip5){
            return $ip1 + $ip2 + $ip3 + $ip4 + $ip5;
        }

        echo "<hr> Sum is ".makeSum2(11, 22);
        echo "<hr> Sum is ".makeSum3(11, 22, 33);
        echo "<hr> Sum is ".makeSum4(11, 22, 33, 44);
        echo "<hr> Sum is ".makeSum5(11, 22, 33, 44, 55);
    ?>
</body>
</html>