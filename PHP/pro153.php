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
            when you dont know number of loops in advance you need to apply while loop

            count number of digits in e entered numbr

            ex. 11273687 = 8, 123 = 3, 915 = 3, 736373 = 6
        */ 

        $ip1 = 123456432;
        $ans = 0;

        while($ip1 > 0){
            $ans++;
            $ip1 = (int) ($ip1 / 10);
        }

        echo "Answer is $ans";
    ?>
</body>
</html>