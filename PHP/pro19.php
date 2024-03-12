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
        
       $ip1 = "Rajkot";
       echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1); 
       $ip1 = 'Rajkot';
       echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1); 
       $ip1 = 10101;
       echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1); 
       $ip1 = 110.11;
       echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1); 
       $ip1 = false;
       echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1); 
       $ip1 = []; // array
       echo "<hr> Value of \$ip1 is $ip1 and type is ".gettype($ip1); 
    ?>
</body>
</html>
