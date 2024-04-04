<?php
    /*
        The try...catch Statement
        To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.
        Syntax
        try {
            code that can throw exceptions
        } catch(Exception $e) {
            code that runs when an exception is caught
        }

    */ 

    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division is Not Possible");
        }else{
            echo "<hr> Division is ".($ip1 / $ip2);
        }
    }

    echo "<hr> Before Division";
    try{
        division(100, 3);
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }
    echo "<hr> After Division";
?>
