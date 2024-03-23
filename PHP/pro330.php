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
        | 	Find a match for any one of the patterns separated by | as in: cat|dog|fish
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 1233219988 php";
    $pattern = "/(to|of)/"; 
    echo preg_replace($pattern, "#", $ip1);
?>