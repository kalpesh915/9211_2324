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
        
        */

        $ip1 = 10;

        echo "<hr> Value of \$ip1 is $ip1";

        function message(){
            global $ip1;    
            echo "<hr> Value of \$ip1 in message() is $ip1";
            $GLOBALS["ip2"] = 20;
        }

        message();

        echo "<hr>";
        print_r($GLOBALS);
    ?>
</body>
</html>