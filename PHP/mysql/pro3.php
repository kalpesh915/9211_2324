<?php
    /*
        MySQLi Object-Oriented)
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($hostname, $username, $password);

    if($connection->connect_error){
        die("<hr>Error While Connecing with Database Server ".$connection->connect_error);
    }else{
        echo "<hr>Connection Successfully<hr>";
    }

    $connection->close();
?>