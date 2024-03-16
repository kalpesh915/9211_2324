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
            PHP - The if Statement
            The if statement executes some code if one condition is true.
            Syntax

            print greeings message according to time
        */ 

        date_default_timezone_set("Asia/Kolkata");
        //$hours = date("h"); // 12 hour format
        $hours = date("H"); // 24 hour format
        //echo $hours;

        if($hours >= 8 && $hours <= 20){
            echo "Office time";
        }
        echo "<hr> Program Completed";
    ?>
</body>
</html>