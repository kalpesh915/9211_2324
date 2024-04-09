<?php
    /*
        PHP OOP - Class Constants
        Class constants can be useful if you need to define some constant data within a class. A class constant is declared inside a class with the const keyword. A constant cannot be changed once it is declared. Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters. We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:
    */ 

    class Greetings{
        const message1 = "<hr>Have a Nice Day";
        const message2 = "<hr>Good Morning";
        const message3 = "<hr>Good Day";
        const message4 = "<hr>Congratulations";
        const message5 = "<hr>Most Welcome";

        public function printer(){
            echo self::message3;
        }
    }

    $obj1 = new Greetings();
    $obj1->printer();
?>