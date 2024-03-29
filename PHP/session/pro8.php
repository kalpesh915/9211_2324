<?php 
    session_start();
    require_once("menu.php");

    // remove all the session varaibles from session array
    session_unset(); 

    echo "<hr>All Session are Unset<hr>";
?>