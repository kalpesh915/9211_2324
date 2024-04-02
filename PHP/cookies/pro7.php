<?php
    /* 
        verify Cookies
    */ 

    require_once("menu.php");

   
    setcookie("username", "Het Dadhaniya", time() + 86400);
    
    if(count($_COOKIE) > 0){
        echo "<hr> Cookies are Enabled";
    }else{
        echo "<hr> Cookies are Disabled";
    }
    
?>