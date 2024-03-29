<?php 
    session_start();
    require_once("menu.php");

    // remove all the session varaibles from session array
    session_destroy(); 

    echo "<hr>All Session are Destroy<hr>";
?>