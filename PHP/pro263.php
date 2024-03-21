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
        PHP array_multisort() Function
        Return a sorted array in ascending order:
    */

    $a=array("Lion","Dog","Cat","Horse","Tiger","Bear","Zebra");
    array_multisort($a);
    print_r($a);
    ?>
</body>

</html>