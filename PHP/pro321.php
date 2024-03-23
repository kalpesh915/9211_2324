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
        Using preg_replace()
        The preg_replace() function will replace all of the matches of the pattern in a string with another string.
    */ 

    $ip1 = "Welcome to world of Regular expression in php 1 12 123 112233 1233219988 php";
    $pattern = "/o/i"; 
    echo preg_replace($pattern, "#", $ip1);
?>