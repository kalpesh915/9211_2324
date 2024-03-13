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
        echo "<hr> Encrypted String is : ".md5($ip1);
        echo "<hr> Encrypted String is : ".sha1($ip1);
        echo "<hr> Encrypted String is : ".base64_encode($ip1);
    ?>
</body>

</html>