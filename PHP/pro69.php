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
           Slicing
           You can return a range of characters by using the substr() function.
           Specify the start index and the number of characters you want to return.
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";
    
        echo "<hr>".substr($ip1, 10, 5);
        echo "<hr>".substr($ip1, 10, 10);
        echo "<hr>".substr($ip1, 10); //By leaving out the length parameter, the range will go to the end:

    ?>
</body>
</html>