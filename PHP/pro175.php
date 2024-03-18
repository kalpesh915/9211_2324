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
            The real power of PHP comes from its functions.
            PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

            PHP User Defined Functions

            Besides the built-in PHP functions, it is possible to create your own functions.

            A function is a block of statements that can be used repeatedly in a program.
            A function will not execute automatically when a page loads.
            A function will be executed by a call to the function.

            Create a Function

            A user-defined function declaration starts with the keyword function, followed by the name of the function:

            function function_name(list of parameters) : return type{
                executable code 
            }
        */ 

        function greetings(){
            echo "<hr>Welcome to world of PHP Functions<hr>";
        }

        // The opening curly brace { indicates the beginning of the function code, and the closing curly brace } indicates the end of the function.

        greetings(); // Call a Function

        // Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.
        // Tip: Give the function a name that reflects what the function does!
    ?>
</body>
</html>