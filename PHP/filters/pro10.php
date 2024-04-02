<?php
    /*
        validate url
    */ 

    $ip1 = "https://www.localhost.com";

    $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);

    if(filter_var($ip1, FILTER_VALIDATE_URL) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>