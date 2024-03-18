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
            PHP foreach Loop
            The foreach loop - Loops through a block of code for each element in an array or each property in an object.

            The foreach Loop on Arrays
            The most common use of the foreach loop, is to loop through the items of an array.
        */ 

        $city = ["Rajkot", "Ahamdabad", "Baroda", "Bhuj", "Bhavanagar", "Jamnagar", "Morbi", "Junagadh"];

        foreach($city as $tmp){
            echo "<hr> Welcome to $tmp";
        }

        // For every loop iteration, the value of the current array element is assigned to the variabe $tmp. The iteration continues until it reaches the last array element.
    ?>
</body>
</html>