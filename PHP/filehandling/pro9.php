<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP Read Single Line - fgets() : The fgets() function is used to read a single line from a file.

        we cant know about end of file while we use fgets() 
    -->

     <?php 
        $myFile = fopen("data.txt", "r") or die("unable to open file");
        
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);        
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);        
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);        
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);        
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);
        echo "<hr>".fgets($myFile);        
        echo "<hr>".fgets($myFile);
        
        
        fclose($myFile);
     ?>

</body>
</html>