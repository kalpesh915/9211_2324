<?php
    //print_r($_GET);

    //echo "<hr> Welcome ".$_GET["fname"]." ".$_GET["lname"]." To ".$_GET["city"];

    // convert array keys to variable
    extract($_GET);

    echo "<hr> Welcome $fname $lname To $city";
?>