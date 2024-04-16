<?php
    /*
        Insert Data Into MySQL Using MySQLi and PDO
        After a database and a table have been created, we can start adding data in them.
        Here are some syntax rules to follow:
        The SQL query must be quoted in PHP, String values inside the SQL query must be quoted, Numeric values must not be quoted, The word NULL must not be quoted
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
            $sqlquery = "insert into students (fname, lname, city, state, email, phone, gender) values ('Ridham', 'Vishnuswami', 'Rajkot', 'Gujarat', 'ridham@gmail.com', '9988776655', 'Male')";

            if($connection->query($sqlquery) === true){
                echo "<hr> New Record Created With : ".$connection->insert_id." ID<hr>";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>