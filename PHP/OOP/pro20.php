<?php
    /*
        IS A Relationship

        Apple is a Fruit
        Mango is a Fruit
    */ 
    class Fruit{
        public $name, $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "<hr> Fruit Name is {$this->name} Color is {$this->color}";
        }
    }

    class Apple extends Fruit{
        public function message(){
            echo " I am Apple ";
        }
    }

    class Mango extends Fruit{
        public function message(){
            echo " I am Mango ";
        }
    }

    $fruit1 = new Apple("Apple", "red");
    $fruit1->intro();
    $fruit1->message();

    $fruit2 = new Mango("Mango", "Orange");
    $fruit2->intro();
    $fruit2->message();
?>