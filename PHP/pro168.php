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
            Keys and Values
            The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.
            Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.
            This can be done by specifying both the key and value in the foreach defintition, like this:
        */ 

        $city = ["Rajkot"=>12345678, "Ahamdabad"=>11223344, "Baroda"=>1123555, "Bhuj"=>12672736, "Bhavanagar"=>76237657, "Jamnagar"=>26327, "Morbi"=>62352, "Junagadh"=>56312735];

        foreach($city as $key => $tmp){
            echo "<hr> Key is $key Value is $tmp";
        }

    ?>
</body>
</html>