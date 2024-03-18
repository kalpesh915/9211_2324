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
            Alternative Syntax
            The foreach loop syntax can also be written with the endforeach statement like this
        */ 

        $city = ["Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Surat"];

        foreach($city as $x):
            echo "<hr> Welcome to $x";
        endforeach;
    ?>
</body>
</html>