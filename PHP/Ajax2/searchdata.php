<?php
    require_once("Connection.class.php");
    $userid = $_REQUEST["userid"];

    $result = $dbconn->getUser($userid);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            extract($row);
        }
        echo "Welcome $fname $lname to $city your userid is $userid";
    }else{
        echo "No User Found on $userid";
    }


?>