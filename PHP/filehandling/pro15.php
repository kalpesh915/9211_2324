<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP No Create Mode : if you use x mode while opening file with fopen.
        if file is not exist php will create a file and open for writing purpose and if file is exist php failed to open file (because x mode prevent overwriting of file).
    -->

     <?php 
        $myFile = fopen("data4.txt", "x") or die("unable to open file");
        fwrite($myFile, "Welcome to world of files with PHP\n");
        fclose($myFile);
        
     ?>

</body>
</html>