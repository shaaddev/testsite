
<?php

    $host = 'localhost';
    $dbname = 'Random';
    $user = 'root';
    $password = '';

    // DSN
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    # output = 'mysql:host=localhost; dbname=Random

    // PDO connection
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTIONS);

?>