<?php
    /*
        PHP OOP - Traits PHP - What are Traits?
        PHP only supports single inheritance: a child class can inherit only from one single parent. So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem. Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
    */ 

    trait Math1{
        public function Sum($ip1, $ip2){
            echo "<hr>Sum of $ip1 and $ip2 is ".($ip1 + $ip2);
        }

        public function Sub($ip1, $ip2){
            echo "<hr>Sub of $ip1 and $ip2 is ".($ip1 - $ip2);
        }
    }

    trait Math2{
        public function Div($ip1, $ip2){
            echo "<hr>Div of $ip1 and $ip2 is ".($ip1 / $ip2);
        }

        public function Mod($ip1, $ip2){
            echo "<hr>Mod of $ip1 and $ip2 is ".($ip1 % $ip2);
        }
    }

    trait Math3{
        public function Mul($ip1, $ip2){
            echo "<hr>Mul of $ip1 and $ip2 is ".($ip1 * $ip2);
        }

        public function Power($ip1, $ip2){
            echo "<hr>Power of $ip1 and $ip2 is ".($ip1 ** $ip2);
        }
    }

    class Calculation{
        use Math1, Math2, Math3;
    }

    $calculate = new Calculation();

    $calculate->sum(111, 2);
    $calculate->sub(111, 2);
    $calculate->mul(111, 2);
    $calculate->div(111, 2);
    $calculate->mod(111, 2);
    $calculate->power(111, 2);
?>