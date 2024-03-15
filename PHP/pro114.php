<?php
    
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
           
        */ 
        
        class greetings{
            function __construct(){
                echo "<hr>".__CLASS__;
                echo "<hr>".__METHOD__;
                echo "<hr>".greetings::class;
            }
        }

        $obj = new greetings();
    ?>
</body>
</html>