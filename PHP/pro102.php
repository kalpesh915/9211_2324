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

    // Cast to Boolean To cast to boolean, use the (bool) statement:

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = 0;       // Integer
    $d = -1;      // Integer
    $e = 0.1;     // Float
    $f = "hello"; // String
    $g = "";      // String
    $h = true;    // Boolean
    $i = NULL;    // NULL

    $a = (bool) $a;
    $b = (bool) $b;
    $c = (bool) $c;
    $d = (bool) $d;
    $e = (bool) $e;
    $f = (bool) $f;
    $g = (bool) $g;
    $h = (bool) $h;
    $i = (bool) $i;

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
    echo "<hr>";
    var_dump($h);
    echo "<hr>";
    var_dump($i);

    // If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.
    ?>
</body>

</html>