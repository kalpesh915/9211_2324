<?php
    
?>
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
           PHP String Operators, PHP has two operators that are specially designed for strings.
        */ 

        $ip1 = "Rajkot";
        $ip2 = "City";

        echo "<hr>".$ip1." ".$ip2;

        $ip1 .= $ip2;

        echo "<hr>".$ip1;
    ?>
</body>
</html>