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
            Convert String into Array
            The PHP explode() function splits a string into an array.
            The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
        */ 

              //0123456789012345678901234567890
        $ip1 = "welcome to world of php strings";

        echo "<hr> Original String is : $ip1";
        $array1 = explode(" ", $ip1);
        echo "<hr>";
        print_r($array1);

        $array1 = explode("o", $ip1);
        echo "<hr>";
        print_r($array1);

        $array1 = explode(" ", $ip1, 3);
        echo "<hr>";
        print_r($array1);

    ?>
</body>
</html>