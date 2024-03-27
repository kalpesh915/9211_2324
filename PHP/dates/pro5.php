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
        echo "<hr>Current Timezone is : ".date_default_timezone_get();

        date_default_timezone_set("Asia/Kolkata");
        
        echo "<hr>Updated Timezone is : ".date_default_timezone_get();

        date_default_timezone_set("America/New_York");
        
        echo "<hr>Updated Timezone is : ".date_default_timezone_get();
    ?>
</body>
</html>