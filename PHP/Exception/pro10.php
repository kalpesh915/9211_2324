<?php
    /*
        getPrevious() 	If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
    */

    try{
        throw new Exception("Excepion 1 Throw");
    }catch(Exception $err1){
        try{
            throw new Exception("Excepion 2 Throw", 100, $err1);
            //throw new Exception("Excepion 2 Throw", 100);
        }catch(Exception $err2){
            //echo "<hr> Error is $err2";
            //echo "<hr> Previous Error is ".$err2->getPrevious();
            echo "<hr> Previous Error is ".$err2->getPrevious()->getMessage();
        }
    }
?>