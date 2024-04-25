<?php
require_once("commons/session.php");
require_once("classes/Students.class.php");

$result = $students->getUserProfile($username);

while ($row = $result->fetch_assoc()) {
    extract($row);
}

//echo $roll;
$photoResult = $students->getPhoto($roll);

while ($row = $photoResult->fetch_assoc()) {
    $imagepath = $row["imagepath"];
}
//echo $imagepath;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <?php require_once("menu.php"); ?>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Profile Page</h1>
        <div class="my-3">
            <?php
            if (isset($_SESSION["msg"])) {
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
            ?>
        </div>

        <div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo $imagepath; ?>" class="h-25 w-25 rounded-circle">
                    </div>
                    <div class="card-header">
                        <a class="btn">
                            Basic Information
                        </a>
                    </div>
                    <div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control" required value="<?php echo $fname; ?>">
                                        <label for="fname" class="form-label">Enter First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control" required value="<?php echo $lname; ?>">
                                        <label for="lname" class="form-label">Enter Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="city" id="city" placeholder="Enter City Name" class="form-control" required value="<?php echo $city; ?>">
                                        <label for="city" class="form-label">Enter City Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="state" id="state" placeholder="Enter State Name" class="form-control" required value="<?php echo $state; ?>">
                                        <label for="state" class="form-label">Enter State Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control" required pattern="\d{10,13}" value="<?php echo $phone; ?>">
                                        <label for="phone" class="form-label">Enter Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-3 form-floating">
                                        <select class="form-select" name="gender" id="gender" required>
                                            <option value="male" <?php echo ($gender == "male" ? "selected" : ""); ?>>Male</option>
                                            <option value="female" <?php echo ($gender == "female" ? "selected" : ""); ?>>Female</option>
                                        </select>
                                        <label for="gender" class="form-label">Select Gender</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="my-3 form-floating">
                                        <input type="file" name="photo1" id="photo1" placeholder="Select Profile Photo" class="form-control">
                                        <label for="photo1" class="form-label">Select Profile Photo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="my-3 d-flex justify-content-center">
                    <input type="submit" value="Update Profile" class="btn btn-primary mx-2" name="updateProcess">
                    <input type="reset" value="Reset" class="btn btn-danger">
                </div>

            </form>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST["updateProcess"])) {
    $fname = $students->filterData($_POST["fname"]);
    $lname = $students->filterData($_POST["lname"]);
    $city = $students->filterData($_POST["city"]);
    $state = $students->filterData($_POST["state"]);
    $phone = $students->filterData($_POST["phone"]);
    $gender = $students->filterData($_POST["gender"]);

    $students->updateProfile($username, $fname, $lname, $city, $state, $phone, $gender);

    
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Profile Updated
            </div>";
   

    $photo1 = $_FILES["photo1"];

    if ($photo1["name"] !== "") {
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
            if ($size < $validSize) {

                if($imagepath !== "./assets/profileimages/dummyimg.png"){
                    unlink($imagepath);
                }
                move_uploaded_file($source, $destination);
                $students->updateProfileImage($roll, $destination);
                $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                    <button class='btn btn-close' data-bs-dismiss='alert'></button>
                    <b>Success : </b> Profile Data and Image Updated
                    </div>";
            } else {
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn btn-close' data-bs-dismiss='alert'></button>
                    <b>Error : </b> User Updated, Selected file greater than $mb Mb.
                    </div>";
            }
        } else {
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> New User Updated Please Select Valid Image
            </div>";
        }
    }

    header("location:profile.php");
}
?>