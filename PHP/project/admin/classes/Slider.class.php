<?php
    require_once("classes/Connection.class.php");

    class Slider extends Connection{
        public function addNewSlider($slidertitle, $slidertext, $sliderimagepath){
            $sqlquery = "insert into sliders (slidertitle, slidertext, sliderimagepath) values ('$slidertitle', '$slidertext', '$sliderimagepath')";
            $this->connection->query($sqlquery);
        }

        public function getAllSliderImages(){
            $sqlquery = "select * from sliders";
            return $this->connection->query($sqlquery);
        }

        public function getSingleSliderImages($sliderid){
            $sqlquery = "select * from sliders where sliderid = $sliderid";
            return $this->connection->query($sqlquery);
        }

        public function changeSliderStatus($sliderid, $status){
            $sqlquery = "update sliders set status = $status where sliderid = $sliderid";
            $this->connection->query($sqlquery);
        }
    }

    $slider = new Slider();
?>