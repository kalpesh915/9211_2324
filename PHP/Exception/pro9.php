<?php
    /*
        getPrevious() 	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
    */

    try{
        throw new Exception();
    }catch(Exception $err){
        echo "<hr> Previous Error is ";
        var_dump($err->getPrevious());
    }
?>