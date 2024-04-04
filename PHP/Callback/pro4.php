<?php
    /*
        Callbacks in User Defined Functions
        User-defined functions and methods can also take callback functions as arguments. To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:
    */ 
    
    function exclaim($str){
        return "<br>".$str."!";
    }

    function ask($str){
        return "<br>".$str."?";
    }

    function comma($str){
        return "<br>".$str.",";
    }

    function brackets($str){
        return "<br>( ".$str." )";
    }

    function printer($message, $callback){
        echo $callback($message);
    }

    printer("Hello World", "ask");
    printer("Hello World", "exclaim");
    printer("Hello World", "comma");
    printer("Hello World", "brackets");
?>