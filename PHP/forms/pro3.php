<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="fn">Enter First Name :</label>
        <input type="text" name="fname" id="fn" required><br>
        <label for="ln">Enter Last Name :</label>
        <input type="text" name="lname" id="ln" required><br>
        <label for="ct">Enter City :</label>
        <input type="text" name="city" id="ct" required><br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["process"])){
        extract($_POST);
        echo "<hr> Welcome $fname $lname To $city";
    }   
?>