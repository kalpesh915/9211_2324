<?php
    abstract class ParentClass{
        abstract public function prefixName($username);
    }

    class ChildClass extends ParentClass{
        public function prefixName($username, $greetings = "Have a Nice Day", $seperator=","){
            $op = "";
            if($username == "Kenil"){
                $op = "{$greetings} Mr. {$username} {$seperator}";
            }else if($username == "Khushi"){
                $op = "{$greetings} Miss. {$username} {$seperator}";
            }else{
                $op = "{$greetings} {$username} {$seperator}";
            }
            return $op;
        }
    }

    $obj1 = new ChildClass();
    echo "<hr>".$obj1->prefixName("Kenil");
    echo "<hr>".$obj1->prefixName("Khushi");
    echo "<hr>".$obj1->prefixName("Bhalabhai");
?>