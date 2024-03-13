<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
              //0123456789012345678901234567890123
        $ip1 = "Welcome to world of Strings in PHP";
        echo "<hr> Original String is : $ip1";
        echo "<hr>".strlen($ip1);
        echo "<hr>".str_word_count($ip1);
        echo "<hr>".strtolower($ip1);
        echo "<hr>".strtoupper($ip1);
    ?>
</body>

</html>