<?php 
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $db = "stocks";

    $conn = mysqli_connect($hostName, $userName, $password, $db);
    if(!$conn){
        die("Database Not Connect: ".mysqli_connect_error());
    }
    echo "Connected!";
?>