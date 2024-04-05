<?php
    /*
        PHP OOP - Classes and Objects
        A class is a template for objects, and an object is an instance of class.

        OOP Case
        Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties. When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

        Define a Class : A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:
    */ 

    class Student{
        public $roll, $fname, $lname;

        /*
            Below we declare a class named Fruit consisting of two properties ($name and $color) and two methods set_name() and get_name() for setting and getting the $name property:

            set single property data at once
        */ 

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
    
    echo $student1->getRoll();
    echo $student1->getFname();
    echo $student1->getLname();

    echo "<hr>";
    echo $student2->getRoll();
    echo $student2->getFname();
    echo $student2->getLname();

    // Note: In a class, variables are called properties and functions are called methods!
?>