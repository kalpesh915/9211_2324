<?php
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

    $fruit1 = new Apple("Apple", "red");
    $fruit1->intro();
    $fruit1->message();
?>