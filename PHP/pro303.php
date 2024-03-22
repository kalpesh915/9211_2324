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
            Superglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.
            
            PHP Global Variables - Superglobals
            Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

            The PHP superglobal variables are: $GLOBALS, $_SERVER, $_REQUEST, $_POST, $_GET, $_FILES, $_ENV, $_COOKIE, $_SESSION
        */

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
    ?>
</body>
</html>