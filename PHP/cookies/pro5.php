<?php
    /* 
        read cookies
    */ 

    require_once("menu.php");

    date_default_timezone_set("Asia/Kolkata");
    // create username cookies for 2 minutes
    setcookie("username", "Het Dadhaniya", time() + 120);
    setcookie("city", "Anand", time() + 120);
    setcookie("color", "Blue", time() + 120);
    
    echo "<hr>Cookies Modified";
?>