<?php
    declare(strict_types=1);
?>
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
            PHP Associative Arrays
            Associative arrays are arrays that use named keys that you assign to them.

            data storage format key => value
        */ 
        
                        
        $student = [];
        $student[0] = 1;
        $student[1] = "Het";
        $student[2] = "Dadhaniya";
        $student[3] = "Rajkot";
        $student[4] = "Male";
        

        //Trailing Comma : A comma after the last item is allowed: 

        foreach($student as $key => $value){
            echo "<hr> $key is $value";
        }
    ?>
</body>
</html>