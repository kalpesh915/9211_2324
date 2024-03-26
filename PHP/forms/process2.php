<?php
    //print_r($_POST);

    //echo "<hr> Welcome ".$_POST["fname"]." ".$_POST["lname"]." To ".$_POST["city"];

    // convert array keys to variable
    extract($_POST);

    echo "<hr> Welcome $fname $lname To $city";
?>