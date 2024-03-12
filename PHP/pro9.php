<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Select Date of Birth :
    <select>
        <?php
            for($x = 1; $x <= 31; $x++){
                echo "<option>$x</option>";
            }
        ?>
    </select>
    <select>
        <?php
            for($x = 1; $x <= 12; $x++){
                echo "<option>$x</option>";
            }
        ?>
    </select>
    <select>
        <?php
            for($x = 2001; $x <= 2031; $x++){
                echo "<option>$x</option>";
            }
        ?>
    </select>
</body>
</html>