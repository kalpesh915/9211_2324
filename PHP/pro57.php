<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            String Length
            The PHP strlen() function returns the length of a string.        
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";

        echo "<hr>Original String is $ip1";
        echo "<hr>Original String Length is ".strlen($ip1);
        echo "<hr>Original String word count is ".str_word_count($ip1);
    ?>
</body>
</html>