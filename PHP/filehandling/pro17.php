<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="data">Enter Data to write in demo.txt file : </label><br>
        <textarea name="data" id="data"></textarea>
        <input type="submit" value="Write Data" name="process">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["process"])){
        $data = $_POST["data"];

        $myFile = fopen("demo.txt", "w") or die("Unable to Open file");
        fwrite($myFile, $data);
        echo "<hr>File Writing Completed<hr>";
        fclose($myFile);
    }
?>