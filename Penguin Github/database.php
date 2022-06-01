<?php
    $servername = "localhost";
    $username = "root";
    $password = "v3N^^HTK4432zzSsfv89p8cFQPhH3tHxJY";
    $dbname = "penguin";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>