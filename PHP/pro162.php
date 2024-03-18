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
            PHP for Loop
            Number of times loop execute (Range)
            The for loop - Loops through a block of code a specified number of times.
            The PHP for Loop : The for loop is used when you know how many times the script should run.

            for (expression1, expression2, expression3) {
              // code block
            }


            for(initlization; condition; increment / decrement){
                executable code
            }
        */ 

        for($ip1 = 1; $ip1 <= 10; $ip1++){
            echo " $ip1";
        }

        /*
            Example Explained
            The first expression, $ip1 = 1;, is evaluated once and sets a counter to 1.
            The second expression, $ip1 <= 10;, is evaluated before each iteration, and the code block is only executed if this expression evaluates to true. In this example the expression is true as long as $ip1 is less than, or equal to, 10.
            The third expression, $ip1++;, is evaluated after each iteration, and in this example, the expression increases the value of $x by one at each iteration.

        */ 
    ?>
</body>
</html>