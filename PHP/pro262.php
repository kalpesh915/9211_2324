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
        PHP array_merge_recursive() Function
        Merge two arrays into one array:
    */

        $a1=array("a"=>"red","b"=>"green");
        $a2=array("c"=>"blue","b"=>"yellow");
        print_r(array_merge_recursive($a1,$a2));
    ?>
</body>

</html>