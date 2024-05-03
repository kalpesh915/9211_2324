<?php
    require_once("Connection.class.php");

    class Meta extends Connection{
        public function getMetaDetails(){
            $sqlquery = "select * from metatags where metaid = 1";
            return $this->connection->query($sqlquery);
        }

        public function updateMeta($metakeywords, $metadescription, $googletagid){
            $sqlquery = "update metatags set metakeywords = '$metakeywords', metadescription = '$metadescription', googletagid = '$googletagid' where metaid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $meta = new Meta();
?>