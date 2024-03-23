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
      Grouping
      You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 112233 1111 111 11 1111";
    $pattern = "/(11){2}/"; 
    echo "<hr>$ip1<hr>";
    echo preg_replace($pattern, "#", $ip1);
?>