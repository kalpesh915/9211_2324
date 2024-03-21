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
        PHP array_pad() Function
        Return 5 elements and insert a value of "blue" to the new elements in the array:
    */

        $a=array("red","green");
        print_r(array_pad($a,10,"yellow"));
    ?>
</body>

</html>