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
        PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
        The example above can be rewritten like this:
    */

        $ip1 = 100;
        $ip2 = 200; // global
        
        function makeSum(){
            // global $ip1, $ip2;
            echo "<hr> Sum of \$ip1 and \$ip2 is ".($GLOBALS["ip1"] + $GLOBALS["ip2"]);
        }

        makeSum();
    ?>
</body>

</html>