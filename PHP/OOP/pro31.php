<?php
    /*
        PHP OOP - Abstract Classes
    */ 

    abstract class Animal{
        public abstract function SpeakNow();
    }

    class Dog extends Animal{
        public function SpeakNow(){
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