<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "agentieimobiliare";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die(mysqli_error($con));
    }
?>