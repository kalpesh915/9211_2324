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
        PHP array_udiff() Function
        Compare the values of two arrays (use a user-defined function to compare the values) and return the differences:
    */

    function compareFunction($a, $b){
        if($a == $b){
            return 0;
        }else{
            return ($a > $b) ? 1 : -1 ;
        }
    }
    
    $a1=array("a"=>"red","b"=>"green","c"=>"blue");
    $a2=array("a"=>"blue","b"=>"black","e"=>"blue");
    
    $result=array_udiff($a1,$a2,"compareFunction");
    print_r($result);
    
    ?>
</body>

</html>