<?php
    /*
        Encapsulation in PHP is a fundamental concept in object-oriented programming that bundles data and methods within a class, providing a protective barrier around the internal workings of an object. Encapsulation promotes data hiding, preventing direct access to class properties from outside the class.

        Access      Same Class  Child Class Object
        private     Yes         No          No
        protected   Yes         Yes         No
        Public      Yes         Yes         Yes
    */ 

    class Example{
        private $username; // access only for same class    

        public function setUsername($username){
            $this->username = $username;
        }

        public function getUsername(){
            return $this->username;
        }
    }

    $obj1 = new Example();
    $obj1->setUsername("Ridham");
    echo "Welcome ".$obj1->getUsername();
?>