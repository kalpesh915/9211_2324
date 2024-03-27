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
        
        $startDate = strtotime("sunday");
        $endDate = strtotime("+3 month");

        while($startDate < $endDate){
            echo "<hr>".date("d/m/Y", $startDate);
            $startDate = strtotime("+1 week", $startDate);
        }
    ?>
</body>
</html>