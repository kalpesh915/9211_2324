<?php
    require_once("Connection.class.php");

    class Team extends Connection{
        public function addNewMember($membername, $memberdesignation, $memberdescription, $teamtwitter, $teamfacebook, $temalinkedin, $teaminstagram, $teamgithub, $teamyoutube, $teamsnapchat, $teamtelegram, $imagepath) {
            $sqlquery = "insert into team (membername, memberdesignation, memberdescription, teamtwitter, teamfacebook, teamlinkedin, teaminstagram, teamgithub, teamyoutube, teamsnapchat, teamtelegram, memberimage) values ('$membername', '$memberdesignation', '$memberdescription', '$teamtwitter', '$teamfacebook', '$temalinkedin', '$teaminstagram', '$teamgithub', '$teamyoutube', '$teamsnapchat', '$teamtelegram', '$imagepath')";

            $this->connection->query($sqlquery);
        }

        public function getAllMembers(){
            $sqlquery = "select * from team ";
            return $this->connection->query($sqlquery);
        }

        public function getSingleMember($teamid){
            $sqlquery = "select * from team where teamid = $teamid";
            return $this->connection->query($sqlquery);
        }

        public function changeMemberStatus($teamid, $status){
            $sqlquery = "update team set status = $status where teamid = $teamid";
            return $this->connection->query($sqlquery);
        }

        public function updateMember(){

        }

        public function deleteMember($teamid) {
            
        }
    }

    $team = new Team();
?>