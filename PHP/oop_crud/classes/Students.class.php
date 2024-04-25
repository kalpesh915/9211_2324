<?php
    require_once("Connection.class.php");

    class Students extends Connection{
        public function login($email, $upass){

        }

        public function signup($fname, $lname, $city, $state, $email, $upass, $phone, $gender){
            // code for check email is exist or not
            $sqlquery = "select * from students where email = '$email'";
            $result = $this->connection->query($sqlquery);

            if($result-> num_rows > 0){
                return 0;
            }else{
                $sqlquery = "insert into students (fname, lname, city, state, email, upass, phone, gender) values ('$fname', '$lname', '$city', '$state', '$email', '$upass', '$phone', '$gender')";
                $this->connection->query($sqlquery);
                return $this->connection->insert_id;
            }
        }

        public function addDummyImage($roll) {
            $sqlquery = "insert into images (roll, imagepath) values ($roll, 'assets/profileimages/dummyimg.png')";
            $this->connection->query($sqlquery);
        }

        public function addProfileImage($roll, $imagepath) {
            $sqlquery = "insert into images (roll, imagepath) values ($roll, '$imagepath')";
            $this->connection->query($sqlquery);
        }

        public function loginStudent($email, $upass){
            $sqlquery = "select * from students where email = '$email' and upass = '$upass'";

            $result = $this->connection->query($sqlquery);

            if($result->num_rows > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getLogs($email){
            $sqlquery = "select * from logs where email = '$email'";
            return $this->connection->query($sqlquery);
        }

        public function getOtherUsers($email){
            $sqlquery = "select * from students where email <> '$email'";
            return $this->connection->query($sqlquery);
        }

        public function changePassword($email, $upass, $npass){
            if($this->loginStudent($email, $upass)){
                $sqlquery = "update students set upass = '$npass' where email = '$email'";
                $this->connection->query($sqlquery);
                return true;
            }else{
                return false;
            }
        }

        public function getUserProfile($email){
            $sqlquery = "select * from students where email = '$email'";
            return $this->connection->query($sqlquery);
        }

        public function getPhoto($roll) {
            $sqlquery = "select imagepath from images where roll = $roll";
            //echo $sqlquery;
            return $this->connection->query($sqlquery);
        }

        public function updateProfileImage($roll, $destination) {
            $sqlquery = "update images set imagepath = '$destination' where roll = $roll";
            //echo $sqlquery;
            $this->connection->query($sqlquery);
        }

        public function  updateProfile($email, $fname, $lname, $city, $state, $phone, $gender){
            $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', state = '$state', phone = '$phone', gender = '$gender' where email = '$email'";
            $this->connection->query($sqlquery);
        }

        public function deleteProfile($email){
            $sqlquery = "select roll from students where email = '$email'";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                $roll = $row["roll"];
            }

            $this->deleteImage($roll);

            $sqlquery = "delete from students where email = '$email'";
            $this->connection->query($sqlquery);
        }

        public function deleteImage($roll){
            $sqlquery = "select imagepath from images where roll = $roll";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                // delete image file
                unlink($row["imagepath"]);
            }

            $sqlquery = "delete from images where roll = $roll";
            $this->connection->query($sqlquery);
        }
    }

    $students = new Students();
?>