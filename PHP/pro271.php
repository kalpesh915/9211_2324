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
        PHP array_reduce() Function
        Send the values in an array to a user-defined function and return a string:
    */
        function appendValues($a1, $a2){
            //return $a1." - ".$a2;
            return $a1." * ".$a2;
        }

        $a=array("red","green","blue","yellow","brown");
        print_r(array_reduce($a, "appendValues"));
    ?>
</body>

</html>