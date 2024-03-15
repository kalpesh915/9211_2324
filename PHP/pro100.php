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
            PHP Casting
            Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.

            Change Data Type
            Casting in PHP is done with these statements:

            (string) - Converts to data type String
            (int) - Converts to data type Integer
            (float) - Converts to data type Float
            (bool) - Converts to data type Boolean
            (array) - Converts to data type Array
            (object) - Converts to data type Object
            (unset) - Converts to data type NULL
        */

    // Cast to Integer To cast to integer, use the (int) statement:

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL

    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;


    //To verify the type of any object in PHP, use the var_dump() function:
    echo "<hr>";
    var_dump($a);
    echo "<hr>";
    var_dump($b);
    echo "<hr>";
    var_dump($c);
    echo "<hr>";
    var_dump($d);
    echo "<hr>";
    var_dump($e);
    echo "<hr>";
    var_dump($f);
    echo "<hr>";
    var_dump($g);
    ?>
</body>

</html>