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
            PHP - Concatenate Strings
            To concatenate, or combine, two strings you can use the "." operator:
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";
        $ip2 = "With W3Schools.com";

        echo "<hr>". $ip1 . $ip2;
        echo "<hr>". $ip1 ." ".$ip2;
    ?>
</body>
</html>