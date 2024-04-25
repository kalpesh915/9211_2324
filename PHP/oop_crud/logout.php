<?php
    require_once("commons/session.php");
    require_once("classes/Students.class.php");
    if(isset($_SESSION["validuser"])){
        unset($_SESSION["validuser"]);
        $students->logWriter($username, "Logout Successfully");
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> Logout Successfully
            </div>";        
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Invalid Logout Attempt
        </div>";           
    }

    header("location:index.php");
?>