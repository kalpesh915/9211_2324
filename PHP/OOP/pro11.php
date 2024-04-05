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
        public function __construct($rl, $fn, $ln){
            // initlize property values with constructor
            $this->roll = $rl;
            $this->fname = $fn;
            $this->lname = $ln;

            // call function from constructor
            $this->getData();
        }

        public function getData(){
            echo "<hr> Welcome ".$this->fname." ".$this->lname." Your Roll No. is ".$this->roll;
        }
    }

    $student1 = new Student(111, "Bhalabhai", "Bavaliya");
    $student2 = new Student(112, "Kenil", "Sangani");
    $student3 = new Student(113, "Ridham", "Vishnuswami");
?>