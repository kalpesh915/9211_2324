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
        PHP array_walk() Function
        Run each array element in a user-defined function:
    */

    function myfunction($value,$key){
        echo "The key $key has the value $value<br>";
    }

    $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"Orange");
    array_walk($a,"myfunction");  
    
    ?>
</body>

</html>