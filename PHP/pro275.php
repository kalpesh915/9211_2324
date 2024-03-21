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
        PHP array_search() Function
        Search an array for the value "red" and return its key:
    */
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_search("red",$a);
    ?>
</body>

</html>