<?php
    // code for add new student / mysql code
    if(isset($_POST["addProcess"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb9211";

        try{
            $connection = new mysqli($hostname, $username, $password, $database);

            if($connection->connect_error){
                throw new Exception("Error while connecting Database Server ".$connection->connect_error);
            }else{
                // filter function
                function filterData($data){
                    $data = trim($data);
                    $data = htmlspecialchars($data);
                    $data = stripslashes($data);
                    return $data;
                }

                // collect form data
                $fname = filterData($_POST["fname"]);
                $lname = filterData($_POST["lname"]);
                $city = filterData($_POST["city"]);
                $state = filterData($_POST["state"]);
                $email = filterData($_POST["email"]);
                $phone = filterData($_POST["phone"]);
                $gender = filterData($_POST["gender"]);

                $sqlquery = "insert into students (fname, lname, city, state, email, phone, gender) values ('$fname', '$lname', '$city', '$state', '$email', '$phone', '$gender')";

                if($connection->query($sqlquery) === true){
                    $roll = $connection->insert_id;
                    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                        <button class='btn-close' data-bs-dismiss='alert'></button>
                        <b>Success : </b> New Student <b>$fname $lname </b>is Created with <b>$roll</b> Roll Number.
                    </div>";
                }else{
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> Error while creating new Student in Database
                    </div>";
                }
            }
        }catch(Exception $err){
            echo "<hr> Error is $err";
        }finally{
            $connection->close();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-white text-center bg-primary p-3">Add New Student</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <div class="my-2">
                <?php 
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>  
            </div>
            <div class="my-2 form-floating">
                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required>
                <label for="fname" class="form-label">Enter First Name</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" required>
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="city" id="city" class="form-control" placeholder="Enter City" required>
                <label for="city" class="form-label">Enter City</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="state" id="state" class="form-control" placeholder="Enter State" required>
                <label for="state" class="form-label">Enter State</label>
            </div>

            <div class="my-2 form-floating">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required pattern="\d{10,13}">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>

            <div class="my-2 form-floating">
                <select name="gender" id="gender" class="form-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="fname" class="form-label">Select Gender</label>
            </div>

            <div class="my-2 d-flex justify-content-center">
                <input type="submit" value="Add New Student" class="btn btn-primary mx-2" name="addProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>