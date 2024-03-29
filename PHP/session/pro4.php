<?php 
    session_start();
    require_once("menu.php");

    $_SESSION["username"] = "Riya Barad";
    $_SESSION["city"] = "Ahamdabad";
    $_SESSION["color"] = "Pink";
    $_SESSION["gender"] = "female";
    
    echo "<hr>Session Values are updated<hr>";
?>