<?php
    /*
        validate float
    */ 

    $ip1 = 11.22;

    if(filter_var($ip1, FILTER_VALIDATE_FLOAT) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>