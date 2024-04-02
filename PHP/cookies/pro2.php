<?php
    /* 
        read cookies
    */ 

    require_once("menu.php");

    date_default_timezone_set("Asia/Kolkata");
    echo "<hr>Welcome ".$_COOKIE["username"]." to ".$_COOKIE["city"]." Color is ".$_COOKIE["color"];
?>