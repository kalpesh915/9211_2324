<?php
    /*
        PHP OOP - Constructor
        PHP - The __construct Function
        A constructor allows you to initialize an object's properties upon creation of the object.
        If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        Notice that the construct function starts with two underscores (__)!
    */ 

    class Student{
        public function __construct(){
            echo "<hr> Constructor Called";
        }
    }

    $student1 = new Student();
    $student2 = new Student();
    $student3 = new Student();
?>