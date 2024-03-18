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

        function makeSum(...$ip1){
            $sum = 0;
            foreach($ip1 as $x){
                $sum+=$x;
            }
            return $sum;
        }

        echo "<hr> Sum is ".makeSum(11);
        echo "<hr> Sum is ".makeSum(11, 22);
        echo "<hr> Sum is ".makeSum(11, 22, 33);
        echo "<hr> Sum is ".makeSum(11, 22, 33, 44);
        echo "<hr> Sum is ".makeSum(11, 22, 33, 44, 55);
        echo "<hr> Sum is ".makeSum(11, 22, 33, 44, 55, 66);
        echo "<hr> Sum is ".makeSum(11, 22, 33, 44, 55, 66, 77);
    ?>
</body>
</html>