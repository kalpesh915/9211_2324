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

        public function updateSlider($sliderid, $slidertitle, $slidertext, $sliderimagepath = null){
            if($sliderimagepath === null){
                $sqlquery = "update sliders set slidertitle = '$slidertitle', slidertext = '$slidertext' where sliderid = $sliderid";
                $this->connection->query($sqlquery);
            }else{
                // code for update slider photo
                $sqlquery = "select sliderimagepath from sliders where sliderid = $sliderid";

                $result = $this->connection->query($sqlquery);

                while($row = $result->fetch_assoc()){
                    // delete slider image
                    unlink($row["sliderimagepath"]);
                }

                $sqlquery = "update sliders set slidertitle = '$slidertitle', slidertext = '$slidertext', sliderimagepath = '$sliderimagepath' where sliderid = $sliderid";
                $this->connection->query($sqlquery);
            }
        }
    }

    $slider = new Slider();
?>