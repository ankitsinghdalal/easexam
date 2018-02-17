<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "exam";

    $connection = mysqli_connect($server, $username, $password, $db);

    if(!$connection) {
        echo "Unable to connect to the database";
    } else {
        // connected
    }

?>