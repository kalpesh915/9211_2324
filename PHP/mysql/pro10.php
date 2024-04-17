<?php
    /*
        PHP MySQL Insert Multiple Records
    */ 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb9211";

    try{
        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            throw new Exception("Error while connecting with Database Server ".$connection->connect_error);
        }else{
            $sqlquery = "insert into students (fname, lname, city, state, email, phone, gender) values ('Kenil', 'Sangani', 'Rajkot', 'Gujarat', 'kenil@gmail.com', '9988776655', 'male'); insert into students (fname, lname, city, state, email, phone, gender) values ('deepak', 'Vavdiya', 'Rajkot', 'Gujarat', 'dipak@gmail.com', '9988776655', 'male'); insert into students (fname, lname, city, state, email, phone, gender) values ('ridham', 'vishnuswami', 'Rajkot', 'Gujarat', 'ridham@gmail.com', '9988776655', 'male'); insert into students (fname, lname, city, state, email, phone, gender) values ('sumit', 'talsaniya', 'Rajkot', 'Gujarat', 'sumit@gmail.com', '9988776655', 'male'); insert into students (fname, lname, city, state, email, phone, gender) values ('bhalabahi', 'bavaliya', 'Rajkot', 'Gujarat', 'bhalabahi@gmail.com', '9988776655', 'male'); insert into students (fname, lname, city, state, email, phone, gender) values ('riya', 'Barad', 'Rajkot', 'Gujarat', 'riya@gmail.com', '9988776655', 'female'); insert into students (fname, lname, city, state, email, phone, gender) values ('Khushi', 'Thakar', 'Rajkot', 'Gujarat', 'khushi@gmail.com', '9988776655', 'female'); insert into students (fname, lname, city, state, email, phone, gender) values ('hetvi', 'Maheshwari', 'Rajkot', 'Gujarat', 'hetvi@gmail.com', '9988776655', 'female'); ";

            if($connection->multi_query($sqlquery) === true){
                echo "<hr> New Records are Created";
            }else{
                echo "<hr> Error while Creating Records";
            }
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }
?>