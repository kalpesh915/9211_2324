<?php
    /* 
        read cookies
    */ 

    require_once("menu.php");

    date_default_timezone_set("Asia/Kolkata");
    // Delete a Cookie To delete a cookie, use the setcookie() function with an expiration date in the past:
    setcookie("username", "Het Dadhaniya", time() - 120);
    setcookie("city", "Anand", time() + 120);
    setcookie("color", "Blue", time() + 120);
    
    echo "<hr>Cookies Deleted";
?>