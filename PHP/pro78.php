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
           salt = encryption key
        */ 
              //0123456789012345678901234567890
        //$ip1 = "welcome to world of php strings";
        
        $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
        echo html_entity_decode($str);
    ?>
</body>
</html>