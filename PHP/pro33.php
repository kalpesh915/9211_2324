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
        The PHP print Statement
        The print statement can be used with or without parentheses: print or print().
        Display Text
        The following example shows how to output text with the print command (notice that the text can contain HTML markup)
    */

        $ip1 = 10;
        $city = "Rajkot";

        print "<hr>Welcome to $city your ID is $ip1";
        print "<hr>Welcome to ".$city." your ID is ".$ip1;
        //print "<hr>Welcome to ",$city," your ID is ",$ip1;
        print $city;
    ?>
</body>

</html>