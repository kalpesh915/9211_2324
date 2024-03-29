<?php
    session_start();

    // check if username session is exist or not

    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Please Login First
        </div>";
        header("location:index.php"); // redirect to index page 
    }
?>