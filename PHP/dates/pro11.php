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

        $targetDate = strtotime("31 december");
        $days = ceil(($targetDate - time()) / 60 / 60 / 24);

        echo "Total Days Remaim to 31 December is $days";
    ?>
</body>
</html>