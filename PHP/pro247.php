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
            PHP array_diff_ukey() Function
           Compare the keys of two arrays (using a user-defined key comparison function), and return the differences:
        */ 

        function compareFunction($a, $b){
            if($a == $b){
                return 0;
            }else{
                return ($a > $b) ? 1 : -1 ;
            }
        }
        
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"red","f"=>"green","c"=>"blue","d"=>"black");

        $result=array_diff_ukey($a1, $a2, "compareFunction");
        print_r($result);
    ?>
</body>
</html>