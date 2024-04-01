<?php
    session_start();
    // upload multiple files in single request
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file1[]" id="file1" accept=".jpg, .png, .gif" required multiple>
        <input type="submit" value="Upload Files" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
        print_r($file1);
    }
?>