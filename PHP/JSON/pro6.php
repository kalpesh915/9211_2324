<?php
    /*
        PHP - json_decode() : The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

        Access Array Values with loop
    */ 


    $JSONString = '{"roll":1,"fname":"Het","lname":"Dadhaniya","city":"surat"}';

    $student = json_decode($JSONString, true);

    foreach($student as $key =>$value){
        echo "<hr> $key is $value";
    }
?>