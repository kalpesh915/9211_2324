<?php 
    session_start();
    /*
        PHP Sessions
        A session is a way to store information (in variables) to be used across multiple pages.
        Unlike a cookie, the information is not stored on the users computer.
        What is a PHP Session?
        When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
        Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.So; Session variables hold information about one single user, and are available to all pages in one application.
        
        Start a PHP Session : A session is started with the session_start() function. Session variables are set with the PHP global variable: $_SESSION.
    */ 
    require_once("menu.php");

    $_SESSION["username"] = "Het Dadhaniya";
    $_SESSION["city"] = "Rajkot";
    $_SESSION["color"] = "orange";

    echo "<hr>Session Created<hr>";
?>