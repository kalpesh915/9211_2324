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
            The continue Statement
            With the continue statement we can stop the current iteration, and continue with the next:
        */ 

        $ip1 = 1;

        do{
            if($ip1 == 5){
                $ip1++;
                continue;
            }
            echo " $ip1";
            $ip1++;
        }while($ip1 <= 10); // condition at end of the loop
    ?>
</body>
</html>