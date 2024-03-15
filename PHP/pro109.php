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
            PHP Constants
            Constants are like variables, except that once they are defined they cannot be changed or undefined.

            PHP Constants
            A constant is an identifier (name) for a simple value. The value cannot be changed during the script. A valid constant name starts with a letter or underscore (no $ sign before the constant name). Note: Unlike variables, constants are automatically global across the entire script.
        */ 

        define("username", "Ridham");
        echo username;
    ?>
</body>
</html>