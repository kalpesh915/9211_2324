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
        PHP Variables Scope
        In PHP, variables can be declared anywhere in the script.
        The scope of a variable is the part of the script where the variable can be referenced/used.PHP has three different variable scopes: local, global, static

        Global and Local Scope
        A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
    */

        $ip1 = 100;
        echo "<hr> Value of \$ip1 is $ip1";

        function greetings(){
            global $ip1; // indicate $ip1 is global variable
            echo "<hr> Value of \$ip1 in Function is $ip1";
        }

        greetings();
    ?>
</body>

</html>