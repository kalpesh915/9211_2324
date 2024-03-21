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
        PHP array_replace() Function
        Replace the values of the first array ($a1) with the values from the second array ($a2):
    */
        
        $a=array("red","green","blue","yellow","brown");
        $b=array("black","purple","orange","white","peru");
        print_r(array_replace($a, $b));
    ?>
</body>

</html>