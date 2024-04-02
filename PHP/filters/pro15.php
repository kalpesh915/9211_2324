<?php
    /*
        validate MAC
    */ 

    $ip1 = "1f:3d:33:23:fd:ab";

    if(filter_var($ip1, FILTER_VALIDATE_MAC) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>