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
        echo "<hr>";
        var_dump(is_numeric(11.11));
        echo "<hr>";
        var_dump(is_numeric(1111));
        echo "<hr>";
        var_dump(is_numeric("1111"));
        echo "<hr>";
        var_dump(is_numeric("11 welcome"));
    ?>
</body>
</html>