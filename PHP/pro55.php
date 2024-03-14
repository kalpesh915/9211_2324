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
            A string is a sequence of characters, like "Hello world!".
            Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

            Note There is a big difference between double quotes and single quotes in PHP.Double quotes process special characters, single quotes does not.
        */ 

        $username = "Het Dadhaniya";

        echo "<hr>Hello $username";
        echo '<hr>Hello $username';

    ?>
</body>
</html>