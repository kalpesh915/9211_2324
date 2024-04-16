<?php
    /*
        PHP MySQL alter Table
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb9211";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while connecting with MySql Server ".$connection->connect_error);
        }else{
            $sqlquery = "alter table students add column state varchar(20) after city";

            if($connection->query($sqlquery) === true){
                echo "<hr> Table Alter Successfully <hr>";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>