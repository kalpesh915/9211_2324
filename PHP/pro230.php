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

            sort() - sort arrays in ascending order
            rsort() - sort arrays in descending order

        */ 

        $cars = array("Mahindra", "Suzuki", "Toyota", "Hyundai", "Tata");

        echo "<hr> Original Array is <hr> ";
        print_r($cars);

        echo "<hr> New Sorted Array is <hr> ";
        sort($cars);
        print_r($cars);

        echo "<hr> New Sorted Array is (reverse)<hr> ";
        rsort($cars);
        print_r($cars);
    ?>
</body>
</html>