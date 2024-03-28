<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
      PHP Read Single Character - fgetc() The fgetc() function is used to read a single character from a file.
    -->

     <?php 
        $myFile = fopen("data.txt", "r") or die("unable to open file");
        
        while(!feof($myFile)){
            echo " ".fgetc($myFile);
        }
    
        fclose($myFile);
     ?>

</body>
</html>