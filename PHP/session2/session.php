<?php
    session_start();

    if(isset($_SESSION["validuser"])){
        $username = $_SESSION["validuser"];
    }else{
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissble'>
        <button class='btn btn-close' data-bs-dismiss='alert'></button>
        <b>Error : </b> Please Login First
        </div>";
        header("location:index.php");
    }
?>