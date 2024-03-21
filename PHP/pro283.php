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
        PHP array_unique() Function
        Remove duplicate values from an array:
    */

        $a=array("a"=>"red","b"=>"green","c"=>"red","d"=>"red");
        print_r(array_unique($a));
    
    ?>
</body>

</html>