<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* */

    // Cast to Array To cast to array, use the (array) statement

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL

    $a = (array) $a;
    $b = (array) $b;
    $c = (array) $c;
    $d = (array) $d;
    $e = (array) $e;

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
    ?>
</body>

</html>