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
            Variables are "containers" for storing information.
            $variable_name = value
       */
        
       $city = "Rajkot";

       echo '<hr>Welcome to $city';
       echo "<hr>Welcome to $city";
       echo '<hr>Welcome to '. $city;
       echo "<hr>Welcome to ".$city;
    ?>
</body>
</html>