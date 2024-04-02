<?php
    /*
        Validate an Integer Within a Range
    */ 

    $ip1 = 101;

    if(filter_var($ip1, FILTER_VALIDATE_INT, array("options"=> array("max_range"=>100, "min_range"=>1))) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>