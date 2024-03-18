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
            The break Statement
            With the break statement we can stop the loop even if it has not reached the end:
        */ 

        $city = ["Rajkot", "Baroda", "Bhuj", "Ahamdabad", "Surat"];

        foreach($city as $x){
            if($x == "Bhuj"){
                continue;
            }
            echo "<hr> Welcome to $x";
        }
    ?>
</body>
</html>