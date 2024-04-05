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

            set all the data at once
        */ 

        // setter methods
        public function setData(){
            $this->roll = 1;
            $this->fname = "Ridham";
            $this->lname = "Vishnuswami";
        }

        // getter methods
        public function getData(){
            echo "<hr>".$this->roll." ".$this->fname." ".$this->lname;
        }
    }

    $student1 = new Student();
    $student2 = new Student();
    $student3 = new Student();

    $student1->setData();
    $student2->setData();
    $student3->setData();
    
    $student1->getData();
    $student2->getData();
    $student1->getData();
?>