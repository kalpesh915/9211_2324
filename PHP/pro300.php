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
        PHP uasort() Function
        Sort the elements of an array by key using a user-defined comparison function (and maintains the index association):
    */

        function my_sort($ip1, $ip2){
            if($ip1 == $ip2){
                return 0;
            }else{
                return ($ip1 > $ip2 ) ? 1 : -1;
            }
        }

        $arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
        uksort($arr, "my_sort");

        foreach($arr as $key => $value) {
            echo "[" . $key . "] => " . $value;
            echo "<br>";
        }
    ?>
</body>

</html>