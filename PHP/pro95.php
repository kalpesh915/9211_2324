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
            PHP Floats
            A float is a number with a decimal point or a number in exponential form.
            2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats. The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
        */ 
        echo "<hr>";
        var_dump(is_finite(11.11));
        echo "<hr>";
        var_dump(is_finite(11e111));
        echo "<hr>";
        var_dump(is_finite(11e311));
        echo "<hr>";
        var_dump(is_infinite(11e311));
    ?>
</body>
</html>