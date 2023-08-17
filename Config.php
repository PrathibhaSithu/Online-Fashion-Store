<?php

    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "online fashion store"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // else {
    //     echo "Connection success";
    // }

?> 