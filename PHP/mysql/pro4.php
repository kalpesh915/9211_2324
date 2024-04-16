<?php
    /*
        Example (PDO)
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $connection = new PDO("mysql:host=$hostname;", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<hr>Connection Successfully<hr>";
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }

    $connection = null;

    /*
        Tip: A great benefit of PDO is that it has an exception class to handle any problems that may occur in our database queries. If an exception is thrown within the try{ } block, the script stops executing and flows directly to the first catch(){ } block.
    */ 
?>