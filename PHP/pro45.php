<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    /*
        PHP Object
        Classes and objects are the two main aspects of object-oriented programming. A class is a template for objects, and an object is an instance of a class. When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
    */

        class Student{
            private $roll, $fname, $lname;
            function __construct($roll, $fname, $lname){
                $this->roll = $roll;
                $this->fname = $fname;
                $this->lname = $lname;
            }
        }
    
        $obj1 = new Student(111, "Bhalabahi", "Bavaliya");

        var_dump($obj1);
    ?>
</body>

</html>