<?php
    /*
        PHP OOP - Static Methods
        PHP - Static Methods : Static methods can be called directly - without creating an instance of the class first. Static methods are declared with the static keyword:
    */ 

    class Example{
        static public function greetings(){
            echo "<hr> Good Morning";
        }
    }

    // Call static method
    Example::greetings();
?>