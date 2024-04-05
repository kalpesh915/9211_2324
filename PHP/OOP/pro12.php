<?php
    /*
        PHP OOP - Destructor
        PHP - The __destruct Function
        A destructor is called when the object is destructed or the script is stopped or exited.
        If you create a __destruct() function, PHP will automatically call this function at the end of the script. 
        Notice that the destruct function starts with two underscores (__)!
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

        // destructor
        public function __destruct(){
            echo "<hr> Destructor Called";
        }

        // Tip: As constructors and destructors helps reducing the amount of code, they are very useful!

    }

    $student1 = new Student(111, "Bhalabhai", "Bavaliya");
    $student2 = new Student(112, "Kenil", "Sangani");
    $student3 = new Student(113, "Ridham", "Vishnuswami");
?>