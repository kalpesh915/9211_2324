<?php
    /*
        PHP $_GET
        $_GET contains an array of variables received via the HTTP GET method.
        There are two main ways to send variables via the HTTP GET method:
        Query strings in the URL,HTML Forms


    */ 
    print_r($_POST);

    echo "<hr> Welcome ".$_POST["fname"]." ".$_POST["lname"]." to ".$_POST["city"];
?>