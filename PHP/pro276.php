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
        PHP array_slice() Function
        Start the slice from the third array element, and return the rest of the elements in the array:
    */
    
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,2));

    ?>
</body>

</html>