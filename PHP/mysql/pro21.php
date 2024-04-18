<?php
    /*
        Update Data In a MySQL Table Using MySQLi and PDO
        The UPDATE statement is used to update existing records in a table:
        UPDATE table_name SET column1=value, column2=value2,... WHERE some_column=some_value  
        Notice the WHERE clause in the UPDATE syntax: The WHERE clause specifies which record or records that should be updated. If you omit the WHERE clause, all records will be updated!
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
            //$sqlquery = "update students set city = 'Baroda'";
            //$sqlquery = "update students set city = 'surat'";
            //$sqlquery = "update students set city = 'ahamdbad' where fname = 'ridham'";
            //$sqlquery = "update students set city = 'rajkot' where fname = 'riya'";
            //$sqlquery = "update students set city = 'jamnagar' where roll > 100";
            $sqlquery = "update students set city = 'jamnagar', gender = 'Not Specified' where roll > 100";
            $connection->query($sqlquery);
            echo "<hr> Total {$connection->affected_rows} Records Updated";
        }
    }catch(Exception $err){
        echo "<hr> Error is $err";
    }finally{
        $connection->close();
    }

?>