<?php
    session_start();

    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <b>Success : </b> Logout Successfully
        </div>";
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Invalid Attempt of Logout
        </div>";
    }

    header("location:index.php"); // redirect to index page 
?>