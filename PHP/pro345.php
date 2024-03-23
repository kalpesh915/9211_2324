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
        n{3} 	Matches any string that contains a sequence of 3 n's
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 112233 1111 111 11 1";
    $pattern = "/1{2}/";  
    echo "<hr>$ip1<hr>";
    echo preg_replace($pattern, "#", $ip1);
?>