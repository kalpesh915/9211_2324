<?php
    /*
        PHP OOP - Static Properties
        Static properties can be called directly - without creating an instance of a class. Static properties are declared with the static keyword:
    */ 

    class Example{
        static public $username = "Ridham Vishnuswami";
    }

    // Get static property
    echo Example::$username;
?>