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
           PHP array_filter() Function
           Filter the values of an array using a callback function:
        */ 

        function findOdd($x){
            return ($x & 1);
        }

        $a1=array(1,3,2,3,4,5,6,7,8,9,10,11);
        print_r(array_filter($a1,"findOdd"));
        
    ?>
</body>
</html>