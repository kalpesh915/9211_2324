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
        Using preg_match_all()
        The preg_match_all() function will tell you how many matches were found for a pattern in a string.
    */ 

    $ip1 = "Welcome to world of Regular expression in php";
    $pattern = "/o/i"; 
    echo preg_match_all($pattern, $ip1);
?>