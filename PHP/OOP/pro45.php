<?php
    /*
        PHP OOP - Static Properties
        Static properties can be called directly - without creating an instance of a class. Static properties are declared with the static keyword:
    */ 

    class Example{
        static public $username = "Ridham Vishnuswami";

        public function greetings(){
            echo "<hr> Welcome ".$this::$username;
            echo "<hr> Welcome ".self::$username;
        }
    }

    $obj1 = new Example();
    $obj1->greetings();
?>