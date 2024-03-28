<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP File Open/Read/Close
        In this chapter we will teach you how to open, read, and close a file on the server.
        PHP Open File - fopen() : A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

        The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.

     -->

     <?php 
        $myFile = fopen("data.txt", "r") or die("unable to open file");
        echo "File open Successfully";
        fclose($myFile);
     ?>
</body>
</html>