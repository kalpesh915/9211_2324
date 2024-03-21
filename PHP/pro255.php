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
            PHP array_intersect_uassoc() Function
            Compare the keys and values of two arrays, and return the matches (using a user-defined key comparison function):
        */ 

        function compareFunction($a, $b){
            if($a == $b){
                return 0;
            }else{
                return ($a > $b) ? 1 : -1 ;
            }
        }

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("d"=>"red","b"=>"green","d"=>"blue");

        $result=array_intersect_uassoc($a1,$a2,"compareFunction");
        print_r($result);
    ?>
</body>
</html>