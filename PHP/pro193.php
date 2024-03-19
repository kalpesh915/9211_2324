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
            An array stores multiple values in one single variable:
        */ 
        
        $students = array("Kenil", "Sangani", "Male", "Rajkot", false, 1234.5678, ["Gujarati", "Hindi", "English"], 2007);

        var_dump($students);
    ?>
</body>
</html>