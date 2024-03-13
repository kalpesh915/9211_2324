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
        Strings : Strings in PHP are surrounded by either double quotation marks, or single quotation marks.
    
        Note There is a big difference between double quotes and single quotes in PHP.
        Double quotes process special characters, single quotes does not.

    */
        $city = 'Ahamdabad';

        echo "<hr>Welcome to $city";
        echo '<hr>Welcome to $city';

        /*
            Double or Single Quotes?
            You can use double or single quotes, but you should be aware of the differences between the two. Double quoted strings perform action on special characters. E.g. when there is a variable in the string, it returns the value of the variable:
        */ 
    ?>
</body>

</html>