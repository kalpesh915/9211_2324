<?php
    require_once("Connection.class.php");

    class Users extends Connection{
        // function for user login
        public function adminLogin($email, $password){
            $sqlquery = "select * from adminusers where email = '$email' and password = '$password'";

            //echo $sqlquery;
            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }
        
        // function for count unread log messages
        public function getUnreadLogCount(){
            $sqlquery = "select count(logid) from logs where status = 0";
            $result = $this->connection->query($sqlquery);
            while($row = $result->fetch_assoc()){
                $count = $row["count(logid)"];
            }
            return $count;
        }
    }

    $users = new Users();
?>