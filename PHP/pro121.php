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
            Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y
        */ 

        echo "<hr>";
        var_dump((11 <=> 10));
        echo "<hr>";
        var_dump((11 <=> 11));
        echo "<hr>";
        var_dump((10 <=> 11));
        
    ?>
</body>
</html>