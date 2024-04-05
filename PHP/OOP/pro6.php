<?php
    /*
        PHP - The $this Keyword
        The $this keyword refers to the current object, and is only available inside methods.
        Look at the following example:
    */ 

    class Student{
        public $roll, $fname, $lname;

        // setter methods
        public function setRoll($roll){
            $this->roll = $roll;
        }

        public function setFname($fname){
            $this->fname = $fname;
        }

        public function setLname($lname){
            $this->lname = $lname;
        }

        // getter methods
        public function getRoll(){
            return $this->roll;
        }

        public function getFname(){
            return $this->fname;
        }

        public function getLname(){
            return $this->lname;
        }
    }

    /*
        Define Objects : Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values. Objects of a class are created using the new keyword.
    */ 

    $student1 = new Student();
    $student2 = new Student();

    $student1->setRoll(111);
    $student1->setFname("Ridham");
    $student1->setLname("Vishnuswami");

    $student2->setRoll(112);
    $student2->setFname("Bhalabhai");
    $student2->setLname("Bavaliya");
    
    echo "<hr>".$student1->roll." ".$student1->fname." ".$student1->lname;
    echo "<hr>".$student2->roll." ".$student2->fname." ".$student2->lname;
?>