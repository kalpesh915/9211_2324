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
            PHP $GLOBALS
            $GLOBALS is an array that contains all global variables.
            Global Variables

            Global variables are variables that can be accessed from any scope.

            Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.

            To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.
        */

        $ip1 = 10;
        //print_r($GLOBALS);

        echo "<hr> Value of \$ip1 is $ip1";

        function message(){
            //In PHP you get nothing (or an error) when referring to a global variable without the $GLOBALS syntax:
            //echo "<hr> Value of \$ip1 in message() is $ip1";
            echo "<hr> Value of \$ip1 in message() is ".$GLOBALS["ip1"];
        }

        message();
    ?>
</body>
</html>