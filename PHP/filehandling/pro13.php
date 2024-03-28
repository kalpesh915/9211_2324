<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP Overwriting : Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.
    -->

     <?php 
        // refresh page 5 to 10 times and view data2.txt     
        $myFile = fopen("data2.txt", "w") or die("unable to open file");
        fwrite($myFile, "Welcome to world of files with PHP");
        fclose($myFile);
     ?>

</body>
</html>