<?php
    /*
        PHP OOP - Abstract Classes
        PHP - What are Abstract Classes and Methods?
        Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code. An abstract class or method is defined with the abstract keyword:
    */ 

    abstract class Animal{
        public abstract function SpeakNow();
    }

    $obj1 = new Animal(); // Cannot instantiate abstract class Animal 
?>