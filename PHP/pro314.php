<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.
        Think SECURITY when processing PHP forms!
        The example above does not contain any form validation, it just shows how you can send and retrieve form data. Proper validation of form data is important to protect your form from hackers and spammers!
     -->
    <form action="process1.php" method="get">
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