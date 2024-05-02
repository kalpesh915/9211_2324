<?php
    require_once("Connection.class.php");

    class Contactus extends Connection{
        public function getContactDetails(){
            $sqlquery = "select * from contactus where contactid = 1";
            return $this->connection->query($sqlquery);
        }
    }

    $contactus = new Contactus();
?>