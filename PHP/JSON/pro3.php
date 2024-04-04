<?php
    /*
        PHP - json_decode() : The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

        The json_decode() function returns an object by default. The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
    */ 


    $JSONString = '{"roll":1,"fname":"Het","lname":"Dadhaniya","city":"surat","marks":[11,22,33,44,55]}';

    echo $JSONString."<hr>";

    $student = json_decode($JSONString, true);

    print_r($student);
?>