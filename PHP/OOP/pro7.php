<?php
    /*
        PHP - instanceof
        You can use the instanceof keyword to check if an object belongs to a specific class:
    */ 

    class Student{
        public $roll, $fname, $lname;
    }

    $student1 = new Student();
    $student2 = new Student();

    echo "<hr> \$student1 is instanceof Student ";
    var_dump($student1 instanceof Student);
    echo "<hr> \$student2 is instanceof Student ";
    var_dump($student2 instanceof Student);
?>