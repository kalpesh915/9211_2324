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
        The PHP echo Statement
        The echo statement can be used with or without parentheses: echo or echo().
        Display Text
        The following example shows how to output text with the echo command (notice that the text can contain HTML markup):
    */

        $ip1 = 10;
        $city = "Rajkot";

        echo "<hr>Welcome to $city your ID is $ip1";
        echo "<hr>Welcome to ".$city." your ID is ".$ip1;
        echo "<hr>Welcome to ",$city," your ID is ",$ip1;
        echo $city;
    ?>
</body>

</html>