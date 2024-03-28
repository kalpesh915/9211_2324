<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("users.php");
        require("menu.php");
        echo "<hr>Before Include <hr>"; 
        echo "<h1>Welcome $username to $city</h1>"; 
        require("data.txt");
        echo "<hr>After Include <hr>";    
        require("footer.php");
    ?>

</body>
</html>