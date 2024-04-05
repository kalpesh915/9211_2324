<?php
    /*
        PHP OOP - Constructor
        PHP - The __construct Function
        A constructor allows you to initialize an object's properties upon creation of the object.
        If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        Notice that the construct function starts with two underscores (__)!
    */ 

    class Student{
        public $roll, $fname, $lname;
        public function __construct(){
            // initlize property values with constructor
            $this->roll = 123;
            $this->fname = "Kenil";
            $this->lname = "Sangani";
        }

        public function getData(){
            echo "<hr> Welcome ".$this->fname." ".$this->lname." Your Roll No. is ".$this->roll;
        }
    }

    $student1 = new Student();
    $student2 = new Student();
    $student3 = new Student();

    $student1->getData();
    $student2->getData();
    $student3->getData();
?>