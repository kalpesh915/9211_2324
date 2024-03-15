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
            PHP Casting Strings and Floats to Integers
            Sometimes you need to cast a numerical value into another data type.
            The (int), (integer), and intval() functions are often used to convert a value to an integer.
        */ 
        
        $ip1 = 12345.67890;
        $ans = (int) $ip1;
        echo "<hr> Answer is $ans";

        $ip1 = 12345.67890;
        $ans = (integer) $ip1;
        echo "<hr> Answer is $ans";

        $ip1 = 12345.67890;
        $ans = intval($ip1);
        echo "<hr> Answer is $ans";
    ?>
</body>
</html>