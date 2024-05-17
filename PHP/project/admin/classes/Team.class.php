<?php
require_once("Connection.class.php");

class Team extends Connection
{
    public function addNewMember($membername, $memberdesignation, $memberdescription, $teamtwitter, $teamfacebook, $temalinkedin, $teaminstagram, $teamgithub, $teamyoutube, $teamsnapchat, $teamtelegram, $imagepath)
    {
        $sqlquery = "insert into team (membername, memberdesignation, memberdescription, teamtwitter, teamfacebook, teamlinkedin, teaminstagram, teamgithub, teamyoutube, teamsnapchat, teamtelegram, memberimage) values ('$membername', '$memberdesignation', '$memberdescription', '$teamtwitter', '$teamfacebook', '$temalinkedin', '$teaminstagram', '$teamgithub', '$teamyoutube', '$teamsnapchat', '$teamtelegram', '$imagepath')";

        $this->connection->query($sqlquery);
    }

    public function getAllMembers()
    {
        $sqlquery = "select * from team ";
        return $this->connection->query($sqlquery);
    }

    public function getSingleMember($teamid)
    {
        $sqlquery = "select * from team where teamid = $teamid";
        return $this->connection->query($sqlquery);
    }

    public function changeMemberStatus($teamid, $status)
    {
        $sqlquery = "update team set status = $status where teamid = $teamid";
        return $this->connection->query($sqlquery);
    }

    public function updateMember($teamid, $membername, $memberdesignation, $memberdescription, $teamtwitter, $teamfacebook, $teamlinkedin, $teaminstagram, $teamgithub, $teamyoutube, $teamsnapchat, $teamtelegram, $destination)
    {

        $sqlquery = "update team set membername = '$membername', memberdesignation = '$memberdesignation', memberdescription = '$memberdescription', teamtwitter = '$teamtwitter', teamfacebook = '$teamfacebook', teamlinkedin = '$teamlinkedin', teaminstagram = '$teaminstagram', teamgithub = '$teamgithub', teamyoutube = '$teamyoutube', teamsnapchat = '$teamsnapchat', teamtelegram = '$teamtelegram' where teamid = $teamid";

        //echo $sqlquery;

        if ($destination !== null) {
            // delete current image
            $sqlquery = "select memberimage from team where teamid = $teamid";
            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                unlink($row["memberimage"]);
            }

            $sqlquery = "update team set memberimage = '$destination' where teamid = $teamid";
            $this->connection->query($sqlquery);
        }
    }

    public function deleteMember($teamid){
        // delete current image
        $sqlquery = "select memberimage from team where teamid = $teamid";
        $result = $this->connection->query($sqlquery);

        while($row = $result->fetch_assoc()){
            unlink($row["memberimage"]);
        }

        $sqlquery = "delete from team  where teamid = $teamid";
        $this->connection->query($sqlquery);
    }
}

$team = new Team();
