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
                die("<hr>Connection Failed ".$this->connection->connect_error);
            }
        }

        public function listUsers(){
            $sqlquery = "select userid, fname from users";
            return $this->connection->query($sqlquery);
        }

        public function getUser($userid){
            $sqlquery = "select * from users where userid = $userid";
            return $this->connection->query($sqlquery);
        }
    }

    $dbconn = new Connection();
?>