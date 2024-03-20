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
           PHP array_fill_keys() Function
           Fills an array with values, specifying keys
        */ 

        $keys=array("a","b","c","d");
        $a1=array_fill_keys($keys,"blue");
        print_r($a1);
        
    ?>
</body>
</html>