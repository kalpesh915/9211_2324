<?php
    /*
        validate IP
    */ 

    //$ip1 = "192.168.11.211";
    $ip1 = "192.168.11.311";

    if(filter_var($ip1, FILTER_VALIDATE_IP) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>