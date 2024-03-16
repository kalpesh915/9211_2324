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
            PHP - The if...else Statement
            The if...else statement executes some code if a condition is true and another code if that condition is false, Syntax

            find maximum out of two numbers
        */ 

        $ip1 = 10;
        $ip2 = 20;

        if($ip1 > $ip2){
            $ans = $ip1;
        }else{
            $ans = $ip2;
        }
        echo "<hr> Answer is $ans";
    ?>
</body>
</html>