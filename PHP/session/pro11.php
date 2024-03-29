<?php 
    session_start();
    require_once("menu.php");

    /*
       unset(variable_name)
       remove specofic variable from array
    */ 
    
    unset($_SESSION["username"]);

    echo "<hr>Username removed from session<hr>";
?>