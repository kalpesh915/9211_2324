<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP File Create/Write
        If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

        PHP Write to File - fwrite() : The fwrite() function is used to write to a file.
        The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
    -->

     <?php 
        $myFile = fopen("data1.txt", "w") or die("unable to open file");
        fwrite($myFile, "Welcome to world of files with PHP");
        fclose($myFile);
     ?>

</body>
</html>