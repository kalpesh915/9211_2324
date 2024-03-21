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
        PHP array_uintersect_uassoc() Function
        Compare the keys and values of two arrays (using two user-defined functions for comparison) and return the matches:
    */

    function compareFunctionKey($a, $b){
        if($a == $b){
            return 0;
        }else{
            return ($a > $b) ? 1 : -1 ;
        }
    }

    function compareFunctionValue($a, $b){
        if($a == $b){
            return 0;
        }else{
            return ($a > $b) ? 1 : -1 ;
        }
    }
    
    $a1=array("a"=>"red","b"=>"green","c"=>"blue");
    $a2=array("a"=>"red","b"=>"green","c"=>"green");

    $result=array_uintersect_uassoc($a1,$a2,"compareFunctionValue","compareFunctionKey");
    print_r($result);
    
    ?>
</body>

</html>