<?php
    /*
        PHP - Access Modifiers
        private - the property or method can ONLY be accessed within the class
    */ 

    class Example{
        private function Greetings(){
            echo "<hr>Welcome to world of OOP<hr>";
        }
    }

    $obj1 = new Example();
    $obj1->Greetings();
?>