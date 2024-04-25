<?php
require_once("commons/session.php");
require_once("classes/Students.class.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <?php require_once("menu.php"); ?>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Delete Page</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="my-3 form-floating">
                <input type="password" name="cpass" id="cpass" placeholder="Enter Current Password" class="form-control">
                <label for="cpass" class="form-label">Enter Current Password</label>
            </div>
            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Delete Account" class="btn btn-danger" name="deleteProcess">
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
    if(isset($_POST["deleteProcess"])){
        require_once("classes/Students.class.php");

        $cpass = sha1($students->filterData($_POST["cpass"]));

        if($students->loginStudent($username, $cpass)){
            echo "<form method='post'>
            <div class='my-3 d-grid btn-block'>
                <input type='submit' value='Confirm to Delete Account ?' class='btn btn-danger' name='confirmDeleteProcess'>
            </div></form>";
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Current Password Does not Match
            </div>";
            header("location:delete.php");
        }
    }

    if(isset($_POST["confirmDeleteProcess"])){
        $students->deleteProfile($username);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <b>Success : </b> $username Account is Deleted
        </div>";
        header("location:index.php");
    
    }
?>