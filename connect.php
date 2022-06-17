
<?php

    $host = 'localhost';
    $dbname = 'testfor';
    $user = 'root';
    $pass = '';

    $conn = new mysqli(%host, $user, '', $dbname);

    // chech connection
    if ($conn->connect_error) {
        die ('Connection Failed!');
    } 

?>