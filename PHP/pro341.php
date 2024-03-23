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
        \uxxxx 	Find the Unicode character specified by the hexadecimal number xxxx
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 1233219988 php @ * ()";
    $pattern = "/\u{0065}/i";  // find e or E
    echo preg_replace($pattern, "#", $ip1);
?>