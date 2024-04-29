<?php
    class Connection{
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "mydb9211";

        public $connection = null;

        public function __construct(){
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

            if($this->connection->connect_error){
                die("<hr> Connection Failed ".$this->connection->connect_error);
            }
        }

        function filterData($data){
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }
    }
?>