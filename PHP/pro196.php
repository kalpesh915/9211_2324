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
            The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
        */ 
        

        $students = array("Kenil", "Sangani", "Male", "Rajkot", false, 1234.5678, ["Gujarati", "Hindi", "English"], 2007);

        echo count($students);

    ?>
</body>
</html>