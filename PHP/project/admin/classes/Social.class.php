<?php
    require_once("Connection.class.php");

    class Social extends Connection{
        public function getSocialDetails(){
            $sqlquery = "select * from socialmedia where socialid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateSocialMedia($facebook, $twitter, $youtube, $linkedin, $github, $telegram, $snapchat, $instagram){
            $sqlquery = "update socialmedia set facebook = '$facebook', twitter = '$twitter', youtube = '$youtube', linkedin = '$linkedin', github = '$github', telegram = '$telegram', snapchat = '$snapchat', instagram = '$instagram' where socialid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $social = new Social();
?>