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
        [abc] 	Find one or many of the characters inside the brackets
        [^abc] 	Find any character NOT between the brackets
        [a-i] 	Find any character alphabetically between two letters
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 1233219988 php";
    $pattern = "/[a-i]/i"; 
    echo preg_replace($pattern, "#", $ip1);
?>