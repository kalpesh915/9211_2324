<?php
    /*
        validate INT (ZERO)
    */ 

    $ip1 = 0;

    if(filter_var($ip1, FILTER_VALIDATE_INT) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>