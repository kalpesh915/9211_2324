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
            Double or Single Quotes?
            You can use double or single quotes, but you should be aware of the differences between the two. Double quoted strings perform action on special characters.
            E.g. when there is a variable in the string, it returns the value of the variable:
            Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
        */ 

        $username = "Het Dadhaniya";

        echo "<hr>Hello $username";
        echo '<hr>Hello $username';

    ?>
</body>
</html>