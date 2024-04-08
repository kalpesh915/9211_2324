<?php
    /*
        PHP - Access Modifiers
        Properties and methods can have access modifiers which control where they can be accessed.

        There are three access modifiers:
        public - the property or method can be accessed from everywhere. This is default
        protected - the property or method can be accessed within the class and by classes derived from that class
        private - the property or method can ONLY be accessed within the class
    */ 

    class Example{
        // public - the property or method can be accessed from everywhere. This is default
        function Greetings(){
            echo "<hr>Welcome to world of OOP<hr>";
        }
    }

    $obj1 = new Example();
    $obj1->Greetings();
?>