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
            Passing Arguments by reference
           When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
        */ 

        $ip1 = 100;

        function add10(&$ip1){
            $ip1 += 10;
            echo "<hr> Between Function call \$ip1 is $ip1<hr>"; // 110
        }

        echo "<hr> Before Function call \$ip1 is $ip1<hr>"; // 100
        add10($ip1);
        echo "<hr> After Function call \$ip1 is $ip1<hr>"; // ?
    ?>
</body>
</html>