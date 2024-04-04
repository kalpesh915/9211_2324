<?php
    /*
        Callback Functions
        A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
        Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:
    */ 

    $students = ["Bhalabhai", "Het", "Ridham", "Kenil", "Khushi", "Riya", "Hasti", "Sumit", "Dipak"];

    foreach($students as $tmp){
        echo " ".strlen($tmp);
    }
?>