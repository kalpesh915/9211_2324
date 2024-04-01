<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP File Upload
        With PHP, it is easy to upload files to the server. However, with ease comes danger, so always be careful when allowing file uploads!
        Configure The "php.ini" File First, ensure that PHP is configured to allow file uploads. In your "php.ini" file, search for the file_uploads directive, and set it to On:
    -->

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
<?php
    if(isset($_POST["uploadProcess"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $file1 = $_FILES["file1"];
        // file array
        print_r($file1);
    }
?>