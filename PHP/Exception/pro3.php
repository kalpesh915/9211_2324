<?php
    /*
        PHP Exceptions
        What is an Exception?
        An exception is an object that describes an error or unexpected behaviour of a PHP script. Exceptions are thrown by many PHP functions and classes. User defined functions and classes can also throw exceptions. Exceptions are a good way to stop a function when it comes across data that it cannot use

        Throwing an Exception
        The throw statement allows a user defined function or method to throw an exception. When an exception is thrown, the code following it will not be executed. If an exception is not caught, a fatal error will occur with an "Uncaught Exception" message. Lets try to throw an exception without catching it:
    */ 

    function division($ip1, $ip2){
        if($ip2 == 0){
            throw new Exception("Division is Not Possible");
        }else{
            echo "<hr> Division is ".($ip1 / $ip2);
        }
    }

    //division(123, 4);
    division(123, 0);
?>
