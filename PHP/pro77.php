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
           salt = encryption key
        */ 
              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";
        
        echo "<hr>".crypt($ip1, "rajkot");
        echo "<hr>".crypt($ip1, "morbi");
        echo "<hr>".md5($ip1);
        echo "<hr>".sha1($ip1);
        echo "<hr>".base64_encode($ip1);
    ?>
</body>
</html>