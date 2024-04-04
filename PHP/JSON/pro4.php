<?php
    /*
        PHP - json_decode() : The json_decode() function is used to decode a JSON object into a PHP object or an associative array.
        Access Object Values
    */ 


    $JSONString = '{"roll":1,"fname":"Het","lname":"Dadhaniya","city":"surat","marks":[11,22,33,44,55]}';

    echo $JSONString."<hr>";

    $student = json_decode($JSONString);

    echo "<hr>First Name is ".$student->fname;
    echo "<hr>Last Name is ".$student->lname;
?>