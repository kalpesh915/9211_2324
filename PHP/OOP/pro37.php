<?php
    abstract class ParentClass{
        abstract public function prefixName($username);
    }

    class ChildClass extends ParentClass{
        public function prefixName($username){
            if($username == "Kenil"){
                return "Mr. ". $username;
            }else if($username == "Khushi"){
                return "Miss. ". $username;
            }else{
                return "". $username;
            }
        }
    }

    $obj1 = new ChildClass();
    echo "<hr>".$obj1->prefixName("Kenil");
    echo "<hr>".$obj1->prefixName("Khushi");
    echo "<hr>".$obj1->prefixName("Bhalabhai");
?>