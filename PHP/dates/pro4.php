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
            Get a Time
            Here are some characters that are commonly used for times:
            
            H - 24-hour format of an hour (00 to 23)
            h - 12-hour format of an hour with leading zeros (01 to 12)
            i - Minutes with leading zeros (00 to 59)
            s - Seconds with leading zeros (00 to 59)
            a - Lowercase Ante meridiem and Post meridiem (am or pm)

            Note that the PHP date() function will return the current date/time of the server!
        */ 
        date_default_timezone_set("Asia/Kolkata");
        //echo date("H:i:s a l");
        echo date("h:i:s a l");
    ?>
</body>
</html>