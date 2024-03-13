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
        PHP The global Keyword
        The global keyword is used to access a global variable from within a function. To do this, use the global keyword before the variables (inside the function):
    */

        $ip1 = 100;
        $ip2 = 200; // global
        

        function makeSum(){
            global $ip1, $ip2;
            echo "<hr> Sum of \$ip1 and \$ip2 is ".($ip1+$ip2);
        }

        makeSum();
    ?>
</body>

</html>