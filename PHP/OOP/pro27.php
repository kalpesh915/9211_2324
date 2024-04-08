<?php

    /*
        PHP - The final Keyword
        The final keyword can be used to prevent class inheritance or to prevent method overriding.
        The following example shows how to prevent class inheritance:
    */ 

    final class Fruit{
        public $name, $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "<hr> Fruit Name is {$this->name} and Color is {$this->color}";
        }
    }

    // we cannot inherit final class Fruit
    class Mango extends Fruit{
        public $weight, $price;

        public function __construct($name, $color, $weight, $price){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
            $this->price = $price;
        }

        public function intro(){
            echo "<hr> Fruit Name is {$this->name} and Color is {$this->color} weight is {$this->weight} and Price is {$this->price}";
        }
    }

    $obj1 = new Mango("Kesar", "Orange", "250GMS", "25Rs.");
    $obj1->intro();
?>