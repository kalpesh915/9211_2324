<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP Append Text : You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
    -->

     <?php 
        // refresh page 5 to 10 times and view data3.txt
        $myFile = fopen("data3.txt", "a") or die("unable to open file");
        fwrite($myFile, "Welcome to world of files with PHP\n");
        fclose($myFile);
        echo "Appending Completed";
     ?>

</body>
</html>