<?php 
    session_start();
    require_once("menu.php");

    if(isset($_SESSION["username"])){
        echo "<h1>Welcome Admin, ".$_SESSION["username"]."</h1>";
    }else{
        echo "<h1>Welcome Guest";
    }
?>