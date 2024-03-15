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
            Null coalescing
            Returns the value of $x
            The value of $x is expr1 if expr1 exists, and is not NULL. If expr1 does not exist, or is NULL, the value of $x is expr2.
        */ 

        //$username = "Ridham";
        
        echo "Welcome ".($username ?? "Guest").",";
    ?>
</body>
</html>