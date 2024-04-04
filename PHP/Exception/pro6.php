<?php
    /*
        The try...catch...finally Statement
        The try...catch...finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. If finally is present, the catch block is optional.
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
        //division(100, 0);
        division(100, 10);
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        echo "<hr> Finally Block Executed";
    }
    echo "<hr> After Division";

?>
