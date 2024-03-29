<?php 
    session_start();
    require_once("menu.php");

    echo "Welcome ".$_SESSION["username"]." to ".$_SESSION["city"]." Color is ".$_SESSION["color"];
?>