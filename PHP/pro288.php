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
        PHP compact() Function
        Create an array from variables and their values:
    */

    $firstname = "Peter";
    $lastname = "Griffin";
    $city = "Rajkot";
    $age = "41";
    
    $result = compact("firstname", "lastname", "age", "city");
    
    print_r($result);

    echo "<hr>".count($result);
    
    ?>
</body>

</html>