<?php
    require_once("Connection.class.php");

    class Settings extends Connection{
        public function getAllSettings(){
            $sqlquery = "select * from settings";
            return $this->connection->query($sqlquery);
        }

        public function updateSettings($googletanslate, $careeroption) {
            $sqlquery = "update settings set googletranslate = $googletanslate, careeroption = $careeroption where settingid = 1";
            $this->connection->query($sqlquery);
        }
    }

    $settings = new Settings();
?>