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
           
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";
        
        echo "<hr>".addcslashes($ip1, "o");
        echo "<hr>".addslashes('What does "yolo" mean?');
        echo "<hr>".bin2hex("1010110");
        echo "<hr>".chop($ip1, "strings");
        echo "<hr>".chr(65);
        echo "<hr>".chunk_split($ip1, 5, "+");
        echo "<hr>".chunk_split($ip1, 5, "|");
        echo "<hr>".chunk_split($ip1, 1, "_");
    ?>
</body>
</html>