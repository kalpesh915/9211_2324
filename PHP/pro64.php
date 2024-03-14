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
            trim function remove white space form string
        */ 

              //0123456789012345678901234567890
        $ip1 = "     welcome to world of php strings    ";

        echo "<hr> Original String is : $ip1";
        echo "<hr>".strlen($ip1);
        
        $ip1 = ltrim($ip1);
        echo "<hr>".strlen($ip1);

        $ip1 = rtrim($ip1);
        echo "<hr>".strlen($ip1);
    ?>
</body>
</html>