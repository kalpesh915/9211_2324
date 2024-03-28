<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
        Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website. 
    -->

    <?php
        include("data.txt");
        include("data.txt");
        include("data.txt");
    ?>
</body>
</html>