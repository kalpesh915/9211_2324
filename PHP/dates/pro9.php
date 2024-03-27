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
            Create a Date From a String With strtotime()
            The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
        */ 
        
        $newDate = strtotime("31 march 2030 10:15:30");
        echo date("d/m/Y h:i:s a l", $newDate);
    ?>
</body>
</html>