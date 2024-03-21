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
        PHP array_map() Function
        Send each value of an array to a function, multiply each value by itself, and return an array with the new values:
    */

        $values = [11, 2, 34, 56, 43, 67, 56, 89];

        function multiplyby2($x){
            return $x * 2;
        }

        $result = array_map("multiplyby2", $values);

        print_r($result);
    ?>
</body>

</html>