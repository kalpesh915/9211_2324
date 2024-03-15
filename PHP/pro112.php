<?php
    namespace codersWorld;
    use codersWorld;
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
            PHP Magic Constants

            PHP Predefined Constants
            PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".
            These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.
        */ 
        
        echo "<hr>".__DIR__;
        echo "<hr>".__FILE__;
        echo "<hr>".__LINE__;
        echo "<hr>".__NAMESPACE__;
    ?>
</body>
</html>