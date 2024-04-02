<?php
    /*
        Validate URL - Must Contain QueryString 
        https://www.google.com?q=rajkot
    */ 

    //$ip1 = "https://www.google.com?q=rajkot";
    $ip1 = "https://www.google.com";

    if(filter_var($ip1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === $ip1){
        echo "<hr> Valid Value <hr>";
    }else{
        echo "<hr> Invalid Value <hr>";
    }
?>