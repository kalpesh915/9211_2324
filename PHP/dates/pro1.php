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
            PHP Date and Time
            The PHP date() function is used to format a date and/or a time.
            Syntax :    date(format,[timestamp]) 

            default time zone berlin/ set to india
            The PHP date() function formats a timestamp to a more readable date and time.
            Parameter 	Description
            format 	    Required. Specifies the format of the timestamp
            timestamp 	Optional. Specifies a timestamp. Default is the current date and time
        */ 
        date_default_timezone_set("Asia/Kolkata");
        //echo date("d/m/Y h:i:s a l");
        //echo date("d/m/y");
        //echo date("d/m/Y");
        //echo date("h:i:s a l");
        echo date("H:i:s a l");
    ?>
</body>
</html>