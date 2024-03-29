<?php 
    session_start();
    require_once("menu.php");

    /*
        session_reset() reinitializes a session with original values stored in session storage. This function requires an active session and discards changes in $_SESSION. 
    */ 
    session_reset(); 

    echo "<hr>All Session are Reset<hr>";
?>