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
        PHP usort() Function
        Sort the elements of an array by values using a user-defined comparison function
    */

        function my_sort($ip1, $ip2){
            if($ip1 == $ip2){
                return 0;
            }else{
                return ($ip1 < $ip2 ) ? 1 : -1;
            }
        }

        $arr = array(12, 3, 56, 54, 768, 9, 76, 90, 5);
        usort($arr, "my_sort");

        foreach($arr as $value) {
            echo " " . $value;
            echo "<br>";
        }
    ?>
</body>

</html>