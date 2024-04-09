<?php
    /*
        PHP OOP - Interfaces
        PHP - What are Interfaces? : Interfaces allow you to specify what methods a class should implement. Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
        Interfaces are declared with the interface keyword:
    */ 

    interface Animal{
        public function SpeakNow();
        public function Eat();
        public function Type();
    }

    class Dog implements Animal{

        public function __construct(){
            $this->SpeakNow();
            $this->Eat();
            $this->Type();
        }

        public function SpeakNow(){
            echo "<hr>Dog Says Bow Bow";
        }

        public function Eat(){
            echo " Dog Eats All Food ";
        }

        public function Type(){
            echo "Dog is Friendly Animal<hr>";
        }
    }

    class Cat implements Animal{
        public function __construct(){
            $this->SpeakNow();
            $this->Eat();
            $this->Type();
        }

        public function SpeakNow(){
            echo "<hr>Cat Says Meow Meow";
        }

        public function Eat(){
            echo " Cat Eats All Food ";
        }

        public function Type(){
            echo "Cat is Friendly Animal<hr>";
        }
    }

    class Wolf implements Animal{
        public function __construct(){
            $this->SpeakNow();
            $this->Eat();
            $this->Type();
        }

        public function SpeakNow(){
            echo "<hr>Wolf Says Woooooooo Wooooooo";
        }

        public function Eat(){
            echo " Wolf Eats Non Vegeterian Food ";
        }

        public function Type(){
            echo "Wolf is Wild Animal<hr>";
        }
    }

    $obj1 = new Dog();
    $obj2 = new Cat();
    $obj3 = new Wolf();

    /*
        PHP - Interfaces vs. Abstract Classes
        Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
        Interfaces cannot have properties, while abstract classes can
        All interface methods must be public, while abstract class methods is public or protected
        All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
        Classes can implement an interface while inheriting from another class at the same time
    */ 
?>