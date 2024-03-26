<?php
    $fname = $lname = $email = $city = $website = $gender = "";

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["process"])){
        $fname = filterData($_POST["fname"]);
        //$fname = $_POST["fname"];
        $lname = filterData($_POST["lname"]);
        $email = filterData($_POST["email"]);
        $city = filterData($_POST["city"]);
        $website = filterData($_POST["website"]);
        $gender = filterData($_POST["gender"]);

        echo "<hr> Welcome $fname $lname to $city your email is $email website is $website and selected gender is $gender";
    }   
    
    function filterData($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="fn">Enter First Name :</label>
        <input type="text" name="fname" id="fn"><br>
        <label for="ln">Enter Last Name :</label>
        <input type="text" name="lname" id="ln"><br>
        <label for="email">Enter Email Address :</label>
        <input type="text" name="email" id="email"><br>
        <label for="ct">Enter City :</label>
        <input type="text" name="city" id="ct"><br>
        <label for="web">Enter Website :</label>
        <input type="text" name="website" id="web"><br>
        <label for="gender">Select Gender :</label>
        <input type="radio" name="gender" id="gender" value="Male">Male 
        <input type="radio" name="gender" id="gender" value="Female">Female <br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>