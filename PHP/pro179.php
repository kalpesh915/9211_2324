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
            PHP Function Arguments
            Information can be passed to functions through arguments. An argument is just like a variable. Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma. 
        */ 

        function greetings(String $username, int $empcode){
            echo "<hr>Welcome ".$username." your empolyee code is $empcode<hr>";
        }

        greetings("Riya", 1122334455); 
        greetings("Ridham", 1234554321); 
        greetings(112266655, "Kenil")
    ?>
</body>
</html>