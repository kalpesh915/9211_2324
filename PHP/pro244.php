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
            PHP array_diff_assoc() Function
            Compare the keys and values of two arrays, and return the differences:
        */ 
        
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"red","f"=>"green","c"=>"blue","d"=>"black");

        $result=array_diff_assoc($a1,$a2);
        print_r($result);
    ?>
</body>
</html>