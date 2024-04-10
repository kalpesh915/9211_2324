<?php
    /*
        To call a static property from a child class, use the parent keyword inside the child class:
    */ 

    class StaticParent{
        static public $username = "Ridham Vishnuswami";
    }

    class StaticChild extends StaticParent{
        public function greetings(){
            echo "<hr>Welcome ".StaticParent::$username;
            echo "<hr>Welcome ".parent::$username;
        }
    }

    $obj1 = new StaticChild();
    $obj1->greetings();
?>