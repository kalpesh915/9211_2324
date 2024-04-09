<?php
    /*
        PHP OOP - Abstract Classes
        When inheriting from an abstract class, the child class method must be defined with the same name, and the same or a less restricted access modifier. So, if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

        Private         =   more restricted
        Protected       =   moderate restricted
        Public          =   no restricted

        So, when a child class is inherited from an abstract class, we have the following rules:

        The child class method must be defined with the same name and it redeclares the parent abstract method
        The child class method must be defined with the same or a less restricted access modifier
        The number of required arguments must be the same. However, the child class may have optional arguments in addition
    */ 

    abstract class Animal{
        public abstract function SpeakNow();
    }

    class Dog extends Animal{
        protected function SpeakNow(){
            echo "<hr> Dog Says Bow Bow";
        }
    }

    class Cat extends Animal{
        public function SpeakNow(){
            echo "<hr> Cat Says Meow Meow";
        }
    }

    $obj1 = new Dog();
    $obj1->SpeakNow();

    $obj2 = new Cat();
    $obj2->SpeakNow();
    
?>