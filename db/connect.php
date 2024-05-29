<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "sem2";

    $conn = new mysqli($host, $username, $password, $db);

    if($conn->connect_error){
        die("Connect Fail". $conn->connect_error);
    }
    echo 'Connect Success!'

?>