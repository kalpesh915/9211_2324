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
            Passing Arguments by value
            In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
        */ 

        $ip1 = 100;

        function add10($ip1){
            $ip1 += 10;
            echo "<hr> Between Function call \$ip1 is $ip1<hr>"; // 110
        }

        echo "<hr> Before Function call \$ip1 is $ip1<hr>"; // 100
        add10($ip1);
        echo "<hr> After Function call \$ip1 is $ip1<hr>"; // ?
    ?>
</body>
</html>