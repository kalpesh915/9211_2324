<?php
    class Connection{
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "9211project";

        public $connection = null;

        // code for connect database 
        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                die("<hr> Connection Failed ".$this->connection->connect_error);
            }
        }

        // function for filter data
        public function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

        // function for write event logs
        public function logWriter($email, $logMessage){
            $sqlquery = "insert into logs (email, logmessage) values ('$email', '$logMessage')";
            $this->connection->query($sqlquery);
        }
    }
?>