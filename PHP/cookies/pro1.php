<?php
    /* 
        PHP Cookies : What is a Cookie? A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

        Create Cookies With PHP
        A cookie is created with the setcookie() function.
        Syntax : setcookie(name, value, expire, path, domain, secure, httponly);

    */ 

    require_once("menu.php");

    date_default_timezone_set("Asia/Kolkata");
    // create username cookies for 2 minutes
    setcookie("username", "Ridham Vishnuswami", time() + 120);
    setcookie("city", "Ahamdabad", time() + 120);
    setcookie("color", "Red", time() + 120);

    echo "<hr>Cookies Creates<hr>";
?>