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
           Negative Length
           Use negative length to specify how many characters to omit, starting from the end of the string:
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";
    
        echo "<hr> Original String is : $ip1";
        echo "<hr>".substr($ip1, 10);
        echo "<hr>".substr($ip1, 10, -8);
        
        //Note The last character has index -1.
    ?>
</body>
</html>