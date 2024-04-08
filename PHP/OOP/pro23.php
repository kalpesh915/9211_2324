<?php
    /*
        PHP - Inheritance and the Protected Access Modifier
        In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class. What does that mean?

        Access      same class      child class     object
        protecte    yes             yes             no
    */ 
   
    class ParentClass{
        protected function message(){
            echo "<hr>Message Function Called<hr>";
        }
    }

    class ChildClass extends ParentClass{
        public function caller(){
            $this->message();
        }
    }

    //$obj1 = new ParentClass();
    $obj1 = new ChildClass();
    $obj1->caller();
?>