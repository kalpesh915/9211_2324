<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP Check End-Of-File - feof() 
        The feof() function checks if the "end-of-file" (EOF) has been reached. The feof() function is useful for looping through data of unknown length.
    -->

     <?php 
        $myFile = fopen("data.txt", "r") or die("unable to open file");
        
        while(!feof($myFile)){
            echo "<br>".fgets($myFile);
        }
        
        
        fclose($myFile);
     ?>

</body>
</html>