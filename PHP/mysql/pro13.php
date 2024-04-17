<?php
/*
    PHP MySQL Select Data
*/

$hostname = "localhost";
$username = "root";
$password = "";
$database = "mydb9211";

try {
    $connection = new mysqli($hostname, $username, $password, $database);

    if ($connection->connect_error) {
        throw new Exception("Error while connecting with Database Server " . $connection->connect_error);
    } else {
        $sqlquery = "select * from students";
        $result = $connection->query($sqlquery);
        //print_r($result);

        while($row = $result->fetch_assoc()){
            echo "<hr>";
            print_r($row);
        }
    }
} catch (Exception $err) {
    echo "<hr> Error is $err";
} finally {
    $connection->close();
}
