<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="text-center p-3 text-white bg-primary">Login Page</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required autofocus>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="upass" id="upass" placeholder="Enter Password" class="form-control" required>
                <label for="upass" class="form-label">Enter Password</label>
            </div>

            <div class="my-3 d-flex justify-content-center">
                <input type="submit" value="Login Now" class="btn btn-primary mx-2" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
                <a href="signup.php" class="btn btn-info mx-2">Sign up</a>
            </div>

            <div class="my-3">
                <?php
                    if(isset($_SESSION["msg"])){
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
    if(isset($_POST["loginProcess"])){
        require_once("classes/Students.class.php");

        $email = $students->filterData($_POST["email"]);
        $upass = sha1($students->filterData($_POST["upass"]));

        //echo "<hr> $email $upass";

        if($students->loginStudent($email, $upass)){
            $_SESSION["validuser"] = $email;
            $students->logWriter($email, "Login Successfully");
            header("location:home.php");
        }else{
            $students->logWriter($email, "Invalid Attempt of Login");
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Invalid Username or Password
            </div>";
            header("location:index.php"); 
        }
    }
?>