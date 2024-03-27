<?php
    $fname = $lname = $email = $city = $website = $gender = "";
    $fnameErr = $lnameErr = $emailErr = $cityErr = $websiteErr = $genderErr = "";

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["process"])){

        if(empty($_POST["fname"])){
            $fnameErr = "First Name is Required";
        }else{
            $fname = filterData($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
                $fnameErr = "Only letters and white space allowed in First Name";
            }
        }

        if(empty($_POST["lname"])){
            $lnameErr = "Last Name is Required";
        }else{
            $lname = filterData($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                $lnameErr = "Only letters and white space allowed in Last Name";
            }
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is Required";
        }else{
            $email = filterData($_POST["email"]);    
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid Email Address";
            }
        }

        if(empty($_POST["city"])){
            $cityErr = "City is Required";
        }else{
            $city = filterData($_POST["city"]);
        }
        
        if(empty($_POST["website"])){
            $websiteErr = "Website is Required";
        }else{
            $website = filterData($_POST["website"]);    
            if(!filter_var($website, FILTER_VALIDATE_URL)){
                $websiteErr = "Invalid Website URL";
            }
        }
        
        if(empty($_POST["gender"])){
            $genderErr = "Gender is Required";
        }else{
            $gender = filterData($_POST["gender"]);            
        }
        
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
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    
    <hr><span class="error">* = Required</span><hr>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="fn">Enter First Name :</label>
        <input type="text" name="fname" id="fn"><span class="error"><?php echo $fnameErr;?>*</span><br>
        <label for="ln">Enter Last Name :</label>
        <input type="text" name="lname" id="ln"><span class="error"><?php echo $lnameErr;?>*</span><br>
        <label for="email">Enter Email Address :</label>
        <input type="text" name="email" id="email"><span class="error"><?php echo $emailErr;?>*</span><br>
        <label for="ct">Enter City :</label>
        <input type="text" name="city" id="ct"><span class="error"><?php echo $cityErr;?>*</span><br>
        <label for="web">Enter Website :</label>
        <input type="text" name="website" id="web"><span class="error"><?php echo $websiteErr;?>*</span><br>
        <label for="gender">Select Gender :</label>
        <input type="radio" name="gender" id="gender" value="Male">Male 
        <input type="radio" name="gender" id="gender" value="Female">Female <span class="error">*<?php echo $genderErr;?></span> <br>
        <input type="submit" value="Send Data" name="process">
        <input type="reset" value="Reset">
    </form>
</body>
</html>