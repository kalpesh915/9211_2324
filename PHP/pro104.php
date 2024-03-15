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
        Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
    */

    class Student{
        public $roll, $fname, $lname;
        function __construct($roll, $fname, $lname){
            $this->roll = $roll;
            $this->fname = $fname;
            $this->lname = $lname;
        }
    }

    $obj1 = new Student(111, "Sujal", "Khachariya");

    $array1 = (array) $obj1;
    echo "<hr>";
    var_dump($array1);
    ?>
</body>

</html>