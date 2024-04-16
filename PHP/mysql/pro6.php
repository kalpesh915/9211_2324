<?php
    /*
        PHP MySQL Create Table
        A database table has its own unique name and consists of columns and rows.
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
            $sqlquery = "create table students (roll int auto_increment primary key, fname varchar(20), lname varchar(20), city varchar(20), email varchar(20), phone varchar(20), gender varchar(10))";

            if($connection->query($sqlquery) === true){
                echo "<hr> New Table Created <hr>";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>