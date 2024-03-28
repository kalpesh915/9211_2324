<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP include and require Statements
        It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.
        The include and require statements are identical, except upon failure:

        require will produce a fatal error (E_COMPILE_ERROR) and stop the script
        include will only produce a warning (E_WARNING) and the script will continue
    -->
    <?php
        echo "<hr>Before Include <hr>";    
        //include("data.txt");
        include("data1.txt");
        echo "<hr>After Include <hr>";    
    ?>
</body>
</html>