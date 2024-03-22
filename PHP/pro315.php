<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        PHP $_POST
        $_POST contains an array of variables received via the HTTP POST method.
        There are two main ways to send variables via the HTTP Post method: HTML forms, JavaScript HTTP requests
        $_POST in HTML Forms : A HTML form submits information via the HTTP POST method if the form's method attribute is set to "POST".
        When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.
     -->
    <form action="process2.php" method="post">
        <label>Enter First Name :</label>
        <input type="text" name="fname" id="fn" required> <br>
        <label>Enter Last Name :</label>
        <input type="text" name="lname" id="ln" required> <br>
        <label>Enter City :</label>
        <input type="text" name="city" id="ct" required> <br>
        <input type="submit" value="Send Data">
        <input type="reset" value="Reset">
    </form>
</body>
</html>