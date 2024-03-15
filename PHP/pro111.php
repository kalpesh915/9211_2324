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

            PHP Constant Arrays
            From PHP7, you can create an Array constant using the define() function.
        */ 

        define("cars", [
            "Alfa Romeo",
            "BMW",
            "Toyota"
          ]);
          echo cars[0];
          
    ?>
</body>
</html>