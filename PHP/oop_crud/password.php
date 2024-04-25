<?php
require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <?php require_once("menu.php"); ?>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Password Page</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3 form-floating">
                <input type="password" name="cpass" id="cpass" placeholder="Enter Current Password" class="form-control">
                <label for="cpass" class="form-label">Enter Current Password</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="npass" id="npass" placeholder="Enter New Password" class="form-control">
                <label for="npass" class="form-label">Enter New Password</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="cnpass" id="cnpass" placeholder="Enter Confirm Password" class="form-control">
                <label for="cnpass" class="form-label">Enter Confirm Password</label>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Change Password" class="btn btn-primary" name="changeProcess">
                <input type="reset" value="Reset" class="btn btn-danger mx-2">
            </div>

            <div class="my-3">
                <?php
                if (isset($_SESSION["msg"])) {
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST["changeProcess"])) {
    require_once("classes/Students.class.php");

    $cpass = $students->filterData($_POST["cpass"]);
    $npass = $students->filterData($_POST["npass"]);
    $cnpass = $students->filterData($_POST["cnpass"]);

    if ($npass === $cnpass) {
        $cpass = sha1($cpass);
        $npass = sha1($npass);

        if ($students->changePassword($username, $cpass, $npass)) {
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> Password Updated
            </div>";
        } else {
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Current Password Does not Match
            </div>";
        }
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Confirm Password Does not Match
            </div>";
    }

    header("location:password.php");
}
?>