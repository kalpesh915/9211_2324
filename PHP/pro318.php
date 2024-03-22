<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        receive data in same page
     -->
    <form action="<?php $_SERVER["PHP_SELF"];?>" method="get">
        <label>Enter First Name :</label>
        <input type="text" name="fname" id="fn" required> <br>
        <label>Enter Last Name :</label>
        <input type="text" name="lname" id="ln" required> <br>
        <label>Enter City :</label>
        <input type="text" name="city" id="ct" required> <br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    /*
        $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data. In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
    */ 
    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["process"])){
        echo "<hr> Welcome ".$_REQUEST["fname"]." ".$_REQUEST["lname"]." to ".$_REQUEST["city"];
    }
?>