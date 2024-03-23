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
        i 	Performs a case-insensitive search
        m 	Performs a multiline search (patterns that search for a match at the beginning or end 
            of a string will now match the beginning or end of each line)
        u 	Enables correct matching of UTF-8 encoded patterns
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 1233219988 php";
    $pattern = "/[^abcdefghi]/i"; 
    echo preg_replace($pattern, "#", $ip1);
?>