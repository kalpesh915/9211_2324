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
            PHP switch Statement
            The switch statement is used to perform different actions based on different conditions.
            The PHP switch Statement Use the switch statement to select one of many blocks of code to be executed.
        */ 

        $day = 9;

        switch($day){
            case 1:{
                echo "<hr> Monday";
                break;
            }
            case 2:{
                echo "<hr> Tuesday";
                break;
            }
            case 3:{
                echo "<hr> Wednesday";
                break;
            }
            case 4:{
                echo "<hr> Thursday";
                break;
            }
            case 5:{
                echo "<hr> Friday";
                break;
            }
            case 6:{
                echo "<hr> Saturday";
                break;
            }
            case 7:{
                echo "<hr> Sunday";
                break;
            }
            default:{
                echo "<hr> Day Number out of Range";
                break;
            }   
        }
    ?>
</body>
</html>
