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
            PHP Default Argument Value
            The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
        */ 

        function greetings(String $username, int $empcode = 1){
            echo "<hr>Welcome ".$username." your empolyee code is $empcode<hr>";
        }

        greetings("Riya", 1122334455); 
        greetings("Ridham", 1234554321); 
        greetings("Kenil")
    ?>
</body>
</html>