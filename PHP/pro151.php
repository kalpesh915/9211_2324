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
            PHP while Loop
            The while loop - Loops through a block of code as long as the specified condition is true.

            while(condition){
                executable code
            }
        */ 

        $ip1 = 1;

        while($ip1 <= 10){
            echo " $ip1";
            $ip1++;
        }

        // Note: remember to increment $i, or else the loop will continue forever.

    ?>
</body>
</html>