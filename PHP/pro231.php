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
            PHP Sorting Arrays
            The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
            PHP - Sort Functions For Arrays

            In this chapter, we will go through the following PHP array sort functions:

            asort() - sort associative arrays in ascending order, according to the value
            ksort() - sort associative arrays in ascending order, according to the key
        */ 

        $cars = array("Mahindra"=>1934, "Suzuki"=>1977, "Toyota"=>1941, "Hyundai"=>1976, "Tata"=>1890);

        echo "<hr> Original Array is <hr> ";
        print_r($cars);

        echo "<hr> New Sorted Array is <hr> ";
        asort($cars);
        print_r($cars);

        echo "<hr> New Sorted Array is (reverse)<hr> ";
        ksort($cars);
        print_r($cars);
    ?>
</body>
</html>