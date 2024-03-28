<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success):
     -->

     <?php 
        echo readfile("data.txt");
     ?>

     <!-- The readfile() function is useful if all you want to do is open up a file and read its contents. -->
</body>
</html>