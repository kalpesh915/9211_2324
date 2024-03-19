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
            What is an Array?
            An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
        */ 
        
        $students = array("Kenil", "Sangani", "Male", "Rajkot", false, 1234.5678, ["Gujarati", "Hindi", "English"], 2007);

        //echo $students[4];
        var_dump($students[4]);

        /*
            PHP Array Types : In PHP, there are three types of arrays:
            Indexed arrays - Arrays with a numeric index
            Associative arrays - Arrays with named keys
            Multidimensional arrays - Arrays containing one or more arrays
        */ 
    ?>
</body>
</html>