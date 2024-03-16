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
            The break Keyword
            When PHP reaches a break keyword, it breaks out of the switch block. This will stop the execution of more code, and no more cases are tested. The last block does not need a break, the block breaks (ends) there anyway.
            Warning: If you omit the break statement in a case that is not the last, and that case gets a match, the next case will also be executed even if the evaluation does not match the case!
        */ 

        $day = 5;

        switch($day){
            case 1:{
                echo "<hr> Monday";
                //break;
            }
            case 2:{
                echo "<hr> Tuesday";
                //break;
            }
            case 3:{
                echo "<hr> Wednesday";
                //break;
            }
            case 4:{
                echo "<hr> Thursday";
                //break;
            }
            case 5:{
                echo "<hr> Friday";
                //break;
            }
            case 6:{
                echo "<hr> Saturday";
                //break;
            }
            case 7:{
                echo "<hr> Sunday";
                //break;
            }
            default:{
                // The default keyword specifies the code to run if there is no case match:
                echo "<hr> Day Number out of Range";
                // break;
            }   
        }
    ?>
</body>
</html>
