<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        Modes 	Description
        r 	    Open a file for read only. File pointer starts at the beginning of the file
        w 	    Open a file for write only. Erases the contents of the file or creates a new file 
                if it doesn't exist. File pointer starts at the beginning of the file
        a 	    Open a file for write only. The existing data in file is preserved. File pointer 
                starts at the end of the file. Creates a new file if the file doesn't exist
        x 	    Creates a new file for write only. Returns FALSE and an error if file already exists
        r+  	Open a file for read/write. File pointer starts at the beginning of the file
        w+ 	    Open a file for read/write. Erases the contents of the file or creates a new file 
                if it doesn't exist. File pointer starts at the beginning of the file
        a+ 	    Open a file for read/write. The existing data in file is preserved. File pointer    
                starts at the end of the file. Creates a new file if the file doesn't exist
        x+ 	    Creates a new file for read/write. Returns FALSE and an error if file already exists

        PHP Read File - fread() : The fread() function reads from an open file. The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.
     -->

     <?php 
        $myFile = fopen("data.txt", "r") or die("unable to open file");
        echo fread($myFile, filesize("data.txt")); // read all characters from file
        fclose($myFile);
     ?>

     <!-- 
        PHP Close File - fclose() : The fclose() function is used to close an open file. It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources! The fclose() requires the name of the file (or a variable that holds the filename) we want to close: -->
</body>
</html>