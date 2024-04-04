<?php
    /*
        PHP and JSON
        What is JSON? : JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
        Since the JSON format is a text-based format, it can easily be sent to and from a server, and used as a data format by any programming language.

        PHP and JSON
        PHP has some built-in functions to handle JSON. First, we will look at the following two functions: json_encode() , json_decode() Array to JSON
    */ 

    /*
        PHP - json_encode() : The json_encode() function is used to encode a value to JSON format.
    */ 

    $student = ["roll"=>1, "fname"=>"Het", "lname"=>"Dadhaniya", "city"=>"surat", "marks"=>[11,22,33,44,55]];

    $JSONString = json_encode($student);

    echo $JSONString;
?>