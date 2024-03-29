<?php 
    session_start();
    require_once("menu.php");

    echo "Session ID is <b>".session_id()."</b><hr>";
    session_regenerate_id();
    echo "New Session ID is <b>".session_id()."</b><hr>";
?>