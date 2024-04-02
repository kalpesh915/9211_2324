<?php
    /*
        validate email
    */ 

    $ip1 = "demo@localhost.com";

    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);

    if(filter_var($ip1, FILTER_VALIDATE_EMAIL) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>