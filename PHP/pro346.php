<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>

<?php
    /*
        Quantifiers
        n{2, 5} Matches any string that contains a sequence of at least 2, but not more that 5 n's
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 112233 1111 111 11 1";
    $pattern = "/1{1,3}/"; // 1 min 1 time, max 3 times
    echo "<hr>$ip1<hr>";
    echo preg_replace($pattern, "#", $ip1);
?>