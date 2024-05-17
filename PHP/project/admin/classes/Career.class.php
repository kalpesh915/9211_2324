<?php
    require_once("Connection.class.php");

    class Career extends Connection{
        public function getNewJobApplications(){    
            $sqlquery = "select careerid, fname, lname, jobtype, qualification, experience, dateofbirth from career where status = 0";
            return $this->connection->query($sqlquery);
        }

        public function getAllJobApplications(){
            $sqlquery = "select careerid, fname, lname, jobtype, qualification, experience, dateofbirth from career";
            return $this->connection->query($sqlquery);
        }

        public function getApplication($careerid){
            $sqlquery = "select * from career where careerid = $careerid";
            return $this->connection->query($sqlquery);
        }

        public function updateApplicationStatus($careerid){
            $sqlquery = "update career set status = 1 where careerid = $careerid";
            $this->connection->query($sqlquery);
        }

        public function deleteJobApplication($careerid){
            // delete pdf file
            $sqlquery = "select resumepath from career where careerid = $careerid";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["resumepath"]);
            }

            $sqlquery = "delete from career where careerid = $careerid";
            $this->connection->query($sqlquery);
        }
    }

    $career = new Career();
?>