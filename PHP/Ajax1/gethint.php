<?php
// Array with names
$names = ["Anna","Brittany","Cinderella","Diana","Eva","Fiona","Gunda","Hege","Inga","Johanna","Kitty","Linda","Nina","Ophelia","Petunia","Amanda","Raquel","Cindy","Doris","Eve","Evita","Sunniva","Tove","Unni","Violet","Liza","Elizabeth","Ellen","Wenche","Vicky","Ridham", "riya", "Khushi", "Sumit", "Sujal", "Kenil", "Keshvi", "Deepak", "Deeya", "Bhalabhai", "Jayrajsinh", "jayesh", "James", "Kevin"];

    $text = $_REQUEST["text"];
    //echo $text;

    $hint = "";

    if($text != ""){
        $text = strtolower($text);
        //echo $text;
        $length = strlen($text);

        foreach($names as $name){
            if(stristr($text, substr($name, 0, $length))){
                if($hint == ""){
                    $hint = $name;
                }else{
                    $hint .= ", ".$name;
                }
            }
        }
    }

    echo $hint == "" ? "No Suggestions Found" : $hint;
?>