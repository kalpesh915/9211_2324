<?php
    /*
        PHP Create a MySQL Database
        A database consists of one or more tables. You will need special CREATE privileges to create or to delete a MySQL database.
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";

    try{
        $connection = new mysqli($hostname, $username, $password);

        if($connection->connect_error){
            throw new Exception("Error While Connecting with Database ".$connection->connect_error);
        }else{
            $sqlquery = "create database mydb9211";
            if($connection->query($sqlquery) === true){
                echo "<hr> Database Created";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
    
?>