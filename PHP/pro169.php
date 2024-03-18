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
           The foreach Loop on Objects
           The foreach loop can also be used to loop through properties of an object:
        */ 

        class Student{
            public $roll, $fname, $lname;
            public function __construct($roll, $fname, $lname){
                $this->roll = $roll;
                $this->fname = $fname;
                $this->lname = $lname;
            }
        }

        $obj = new Student(111, "Ridham", "Vishnuswami");

        foreach($obj as $key => $value){
            echo "<hr> $key is $value";
        }
    ?>
</body>
</html>