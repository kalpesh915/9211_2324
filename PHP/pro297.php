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
        PHP shuffle() Function
        Randomize the order of the elements in the array:
    */
        $my_array = array("red", "green", "blue", "yellow", "purple");

        sort($my_array);
        print_r($my_array);
    ?>
</body>

</html>