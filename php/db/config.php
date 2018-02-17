<?php

    $server = "localhost";
    $username = "easexam_DB";
    $password = "#Nokia9711@";
    $db = "easexam_DB";

    $connection = mysqli_connect($server, $username, $password, $db);

    if(!$connection) {
        echo "Unable to connect to the database";
    } else {
        // connected
    }

?>