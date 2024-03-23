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
        ^ 	Finds a match as the beginning of a string as in: ^Hello
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 1233219988 php";
    //$pattern = "/w/i"; 
    $pattern = "/^w/i"; 
    echo preg_replace($pattern, "#", $ip1);
?>