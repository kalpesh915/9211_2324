<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Signup Page</h1>


        <div class="my-3">
            <?php
            if (isset($_SESSION["msg"])) {
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
            ?>
        </div>

        <div id="accordion">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-header">
                        <a class="btn" data-bs-toggle="collapse" href="#collapseBasic">
                            Basic Information
                        </a>
                    </div>
                    <div id="collapseBasic" class="collapse show" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control" required>
                                        <label for="fname" class="form-label">Enter First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required>
                                        <label for="lname" class="form-label">Enter Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="city" id="city" placeholder="Enter City Name" class="form-control" required>
                                        <label for="city" class="form-label">Enter City Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="state" id="state" placeholder="Enter State Name" class="form-control" required>
                                        <label for="state" class="form-label">Enter State Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" required pattern="\d{10,13}">
                                        <label for="phone" class="form-label">Enter Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <select class="form-select" name="gender" id="gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        <label for="gender" class="form-label">Select Gender</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-3 form-floating">
                                        <input type="file" name="photo1" id="photo1" placeholder="Select Profile Photo" class="form-control" required>
                                        <label for="photo1" class="form-label">Select Profile Photo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseLogin">
                            Login Information
                        </a>
                    </div>
                    <div id="collapseLogin" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            <div class="my-3 form-floating">
                                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required autofocus>
                                <label for="email" class="form-label">Enter Email Address</label>
                            </div>
                            <div class="my-3 form-floating">
                                <input type="password" name="upass" id="upass" placeholder="Enter Password" class="form-control" required>
                                <label for="upass" class="form-label">Enter Password</label>
                            </div>
                            <div class="my-3 form-floating">
                                <input type="password" name="cpass" id="cpass" placeholder="Enter Confirm Password" class="form-control" required>
                                <label for="cpass" class="form-label">Enter Confirm Password</label>
                            </div>

                        </div>
                    </div>
                </div>
        </div>

        <div class="my-3 d-flex justify-content-center">
            <input type="submit" value="Signup Now" class="btn btn-primary mx-2" name="signupProcess">
            <input type="reset" value="Reset" class="btn btn-danger">
            <a href="index.php" class="btn btn-info mx-2">Login</a>
        </div>

        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST["signupProcess"])) {
    require_once("classes/Students.class.php");

    $upass = $students->filterData($_POST["upass"]);
    $cpass = $students->filterData($_POST["cpass"]);

    if ($upass === $cpass) {
        $upass = sha1($upass);

        $fname = $students->filterData($_POST["fname"]);
        $lname = $students->filterData($_POST["lname"]);
        $city = $students->filterData($_POST["city"]);
        $state = $students->filterData($_POST["state"]);
        $phone = $students->filterData($_POST["phone"]);
        $gender = $students->filterData($_POST["gender"]);
        $email = $students->filterData($_POST["email"]);

        $roll = $students->signup($fname, $lname, $city, $state, $email, $upass, $phone, $gender);

        if ($roll === 0) {
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> $email already registered with us.
            </div>";
        } else {
            $photo1 = $_FILES["photo1"];
            $name = $photo1["name"];
            $source = $photo1["tmp_name"];
            $size = $photo1["size"];
            $type = $photo1["type"];

            $validTypes = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/svg"];
            $mb = 2;
            $validSize = ($mb * 1024 * 1024);

            $date = date("dMYhisa");
            $random = rand(9999, 99999);

            $destination = "./assets/profileimages/$date $email $random $name";

            // check for valid file type
            if (in_array($type, $validTypes)) {
                if($size < $validSize){
                    move_uploaded_file($source, $destination);
                    $students->addProfileImage($roll, $destination);
                    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                    <button class='btn btn-close' data-bs-dismiss='alert'></button>
                    <b>Success : </b> New Student Created.
                    </div>";
                }else{
                    $students->addDummyImage($roll);
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> New User Created, Selected file greater than $mb Mb. (default image added in profile)
                    </div>";    
                }
            } else {
                $students->addDummyImage($roll);
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> New User Created (invalid Image Selected - default image added in profile).
            </div>";
            }
        }
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Confirm Password does not Match.
        </div>";
    }

    header("location:signup.php");
}
?>