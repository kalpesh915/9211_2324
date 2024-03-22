<?php
    /*
        PHP $_GET
        $_GET contains an array of variables received via the HTTP GET method.
        There are two main ways to send variables via the HTTP GET method:
        Query strings in the URL,HTML Forms


    */ 
    print_r($_GET);

    echo "<hr> Welcome ".$_GET["fname"]." ".$_GET["lname"]." to ".$_GET["city"];
?>