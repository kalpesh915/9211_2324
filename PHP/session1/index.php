<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-fluid">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="my-3 form-floating">
                <input type="email" name="adminemail" id="email" required placeholder="Enter Admin Email Address" class="form-control">
                <label for="email">Enter Email Address</label>
            </div>
            <div class="my-3 form-floating">
                <input type="password" name="adminpass" id="apass" required placeholder="Enter Admin Password" class="form-control">
                <label for="apass">Enter Admin Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>

            <div class="my-2">
                <?php 
                    // check for message session is set or not
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
    if(isset($_POST["loginProcess"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
        //echo "do process";
        $adminemail = $_POST["adminemail"];
        $adminpass = $_POST["adminpass"];

        //echo "$adminemail $adminpass";

        // static check for email and password (in future we use database)
        if($adminemail == "admin@project.com" and $adminpass == "admin"){
            //echo "Correct Username and password";
            $_SESSION["username"] = $adminemail;
            header("location:home.php");
        }else{
            //echo "Incorrect Username and password";
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Invalid Username or Password
            </div>";
            header("location:index.php"); // redirect to index page 
        }
    }
?>