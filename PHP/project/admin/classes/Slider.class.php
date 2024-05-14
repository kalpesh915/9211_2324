<?php
    require_once("classes/Connection.class.php");

    class Slider extends Connection{
        public function addNewSlider($slidertitle, $slidertext, $sliderimagepath, $imagetype){
            $sqlquery = "insert into sliders (slidertitle, slidertext, sliderimagepath, imagetype) values ('$slidertitle', '$slidertext', '$sliderimagepath', $imagetype)";
            $this->connection->query($sqlquery);
        }

        public function getAllSliderImages(){
            $sqlquery = "select * from sliders where imagetype = 1";
            return $this->connection->query($sqlquery);
        }

        public function getAllGalleryImages(){
            $sqlquery = "select * from sliders where imagetype = 2";
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

        public function updateSlider($sliderid, $slidertitle, $slidertext, $sliderimagepath = null, $imagetype){
            if($sliderimagepath === null){
                $sqlquery = "update sliders set slidertitle = '$slidertitle', slidertext = '$slidertext', imagetype = $imagetype where sliderid = $sliderid";
                $this->connection->query($sqlquery);
            }else{
                // code for update slider photo
                $sqlquery = "select sliderimagepath from sliders where sliderid = $sliderid";

                $result = $this->connection->query($sqlquery);

                while($row = $result->fetch_assoc()){
                    // delete slider image
                    unlink($row["sliderimagepath"]);
                }

                $sqlquery = "update sliders set slidertitle = '$slidertitle', slidertext = '$slidertext', sliderimagepath = '$sliderimagepath', imagetype = $imagetype where sliderid = $sliderid";
                $this->connection->query($sqlquery);
            }
        }

        public function deleteImage($sliderid){
            $sqlquery = "select sliderimagepath from sliders where sliderid = $sliderid";

            $result = $this->connection->query($sqlquery);

            while($row = $result->fetch_assoc()){
                // delete slider image
                unlink($row["sliderimagepath"]);
            }

            $sqlquery = "delete from sliders where sliderid = $sliderid";
            $this->connection->query($sqlquery);
        }
    }
    

    $slider = new Slider();
?>